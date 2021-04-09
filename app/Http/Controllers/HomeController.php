<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function employeeHome(){
        $locations=DB::table('cities')->get();
        return view('employee/home',[
            'locations' => $locations,
        ]);
    }
    public function employerHome(){
        return view('employer/home');
    }
}
