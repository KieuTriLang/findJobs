<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    public function index(){
        $data= DB::table('post_jobs')
                    ->join('employers','post_jobs.employer_id','=','employers.employer_id')
                    ->select('post_jobs.*','employers.company_logo')
                    ->orderByDesc('created_at')->paginate(20);
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
        $resume= DB::table('resumes')
                    ->where('user_id','=',Auth::id())
                    ->select('id','avatar_resume','cv_name')
                    ->get();
        $applied= DB::table('jobs_resumes')
                    ->where('job_id','=',$id)
                    ->where('user_id','=',Auth::id())
                    ->get();
        $user_id=Auth::id();
        // dd($resume);
        return view('employee/detailJob',[
            'jobs' =>$jobs,
            'employers'=>$employerData[0],
            'resumes'=>$resume,
            'user_id'=>$user_id,
            'applied'=>$applied,
        ]);
    }
    public function applyJob($job_id,$resume_id){
        DB::table('jobs_resumes')->insert([
            'job_id'=>$job_id,
            'user_id'=>Auth::id(),
            'resume_id'=>$resume_id,
        ]);
        return redirect()->back()->with('success','applied');
    }
    public function unApply($job_id,$user_id){
        DB::table('jobs_resumes')->where('job_id','=',$job_id)->where('user_id','=',$user_id)->delete();
        session()->forget('success');
        return redirect()->back();
    }
}
