<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function employeeHome(){
        $locations=DB::table('cities')->get();
        $postJobs=DB::table('post_jobs')
                        ->join('employers','post_jobs.employer_id','=','employers.employer_id')
                        ->select('post_jobs.*','employers.company_logo')
                        ->orderByDesc('created_at')
                        ->limit('12')
                        ->get();
        // dd($postJobs);
        return view('employee/home',[
            'locations' => $locations,
            'postJobs' => $postJobs,
        ]);
    }
    public function employerHome(){
        return view('employer/home');
    }
}
