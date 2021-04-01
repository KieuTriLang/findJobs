<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
            'company_phone' => 'required',
        ]);
        $company_logo=$request->file('company_logo')->getClientOriginalName();
        $request->file('company_logo')->move(public_path('company_logo'),$company_logo);

        $i=0;
        $user_code="employer$i";
        while(User::where('user_code','=',$user_code)->count()>0){
            $i++;
            $user_code="employer$i";
        }

        $user = new User;
        $user->name = $request->company_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_code = $user_code;
        $user->user_type = $request->user_type;
        $user->save();

        $employer = new Employer;
        $employer->employer_code = $request->user_code;
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
        return redirect()->back();
    }
}
