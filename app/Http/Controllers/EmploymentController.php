<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    public function index(){
        $data= DB::table('post_jobs')
                    ->join('employers','post_jobs.employer_id','=','employers.employer_id')
                    ->select('post_jobs.*','employers.company_logo')
                    ->inRandomOrder()->paginate(20);
        $quantityJob= DB::table('post_jobs')->count('id');
        // dd($data);
        return view("employee/findjob",[
            'post_jobs' => $data,
            'quantityJob'=>$quantityJob,
        ]);
    }
    public function detailJob($id,$employer_id){
        $jobs= DB::table('post_jobs')
                    ->where('post_jobs.id', '=',$id)
                    ->join('employers','post_jobs.employer_id','=','employers.employer_id')
                    ->select('post_jobs.*','employers.company_logo')
                    ->first();
        // dd($jobs);
        $employerData= DB::table('employers')
                            ->where("id",$employer_id)
                            ->get();
        return view('employee/detailJobs',[
            'jobs' =>$jobs,
            'employers'=>$employerData[0],
        ]);
    }
    public function applyJob($job_id,$cv_id){

    }
}
