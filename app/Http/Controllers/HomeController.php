<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function employeeHome(){
        return view('employee/home');
    }
    public function employerHome(){
        return view('employer/home');
    }
}
