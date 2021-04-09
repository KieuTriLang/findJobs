<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Employer;


class RegisterControllerER extends Controller
{
    public function create()
    {
        return view('employer/register');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|confirmed|unique:users',
            'password' => 'required|min:8|confirmed',
            'company_name' => 'required',
            'website' => 'required|url',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:102400',
            'contact_name' => 'required',
            'position'=>'required',
            'company_address' => 'required',
            'company_phone' => 'required|min:6|max:10',
        ]);
        $company_logo = $request->file('company_logo')->getClientOriginalName();
        $company_logo=Str::random(30).$company_logo;
        $request->file('company_logo')->move(public_path('company_logo'),$company_logo);

        $user = new User;
        $user->name = $request->company_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_type = $request->user_type;
        $user->save();

        $employer = new Employer;
        $employer->employer_id = DB::table('users')->where('email','=',$request->email)->select('id')->get()[0]->id;
        $employer->company_name = $request->company_name;
        $employer->company_size = $request->company_size;
        $employer->tax = $request->tax;
        $employer->website= $request->website;
        $employer->company_summary= $request->company_summary;
        $employer->company_logo= $company_logo;
        $employer->contact_name= $request->contact_name;
        $employer->position= $request->position;
        $employer->company_address= $request->company_address;
        $employer->company_phone= $request->company_phone;
        $employer->save();
        return redirect('/employer/sign-up')->with('message','Đăng kí thành công!!');
    }
}
