<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class RegisterControllerEE extends Controller
{
    public function create(){
        return view('employee/register');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $i=0;
        $user_code="employee$i";
        while(User::where('user_code','=',$user_code)->count()>0){
            $i++;
            $user_code="employee$i";
        }
        $user= new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->user_code=$user_code;
        $user->user_type=$request->user_type;
        $user->save();
        return redirect()->back();
    }
}
