<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\PostJobRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\PostJob;

class PostJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = DB::table('post_jobs')->where('employer_id', Auth::id())->select('id', 'hire_position', 'company_name', 'description', 'created_at')->orderByDesc('created_at')->get();
        $count = DB::table('post_jobs')->where('employer_id', Auth::id())->count();
        $company_logo=DB::table('employers')->where('employer_id', Auth::id())->select('company_logo')->get();
        return view('employer/jobsManagement/showJob', [
            'postJobs' => $jobs,
            'count' => $count,
            'company_logo' => $company_logo[0],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hardskills = DB::table('hardskills')->get();
        $softskills = DB::table('softskills')->get();
        return view('employer/jobsManagement/createJob',[
            'hardskills' => $hardskills,
            'softskills' => $softskills,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostJobRequest $request)
    {
        $postJob = new PostJob;
        $postJob->employer_id = Auth::id();
        $postJob->hire_position = $request->hire_position;
        $postJob->company_name = $request->company_name;
        $postJob->description = $request->description;
        $postJob->hardskills = $request->hardskills;
        $postJob->softskills = $request->softskills;
        $postJob->another_des = $request->another_des;
        $postJob->benefit = $request->benefit;
        $postJob->salary = $request->salary;
        $postJob->location = $request->location;
        $postJob->created_at = date('d-m-Y');
        $postJob->save();
        return redirect('/employer/job');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('employer/jobsManagement/detailJob');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hardskills = DB::table('hardskills')->get();
        $softskills = DB::table('softskills')->get();
        $postJobs = DB::table('post_jobs')->where('id', "=", $id)->first();
        return view('employer/jobsManagement/editJob', [
            'postJobs' => $postJobs,
            'hardskills' => $hardskills,
            'softskills' => $softskills,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('post_jobs')
            ->where('id', '=', $id)
            ->update([
                "hire_position" => $request->hire_position,
                "company_name" => $request->company_name,
                "description" => $request->description,
                "hardskills" => $request->hardskills,
                "softskills" => $request->softskills,
                "another_des" => $request->another_des,
                "salary" => $request->salary,
                "location" => $request->location,
                "benefit" => $request->benefit,
                "update_at"=>date('d-m-Y'),
            ]);
        return redirect('/employer/job');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('post_jobs')->where('id', '=', $id)->delete();
        return redirect('/employer/job');
    }
}
