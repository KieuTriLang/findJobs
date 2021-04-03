<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function viewEmployee(){
        return view('employee/login');
    }
    public function viewEmployer(){
        return view('employer/login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password','user_type');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if($request->user_type === '2'){
                return redirect()->intended('employer');
            }
            if($request->user_type === '1'){
                return redirect()->intended('/');
            }

        }

        return back()->withErrors([
            'email' => 'Email or password is incorrect.',
        ]);
    }
    public function logoutEmployee(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function logoutEmployer(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/employer');
    }
}
