<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\PostJobRequest;
use Illuminate\Support\Facades\Auth;
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
        return view('employer/jobsManagement/showJob');
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
        $postJob->hire_logo=$request->hire_logo;
        $postJob->hire_position=$request->hire_position;
        $postJob->company_name= $request->company_name;
        $postJob->description= $request->description;
        $postJob->hardskills= $request->hardskills;
        $postJob->softskills= $request->softskills;
        $postJob->salary= $request->salary;
        $postJob->location= $request->location;
        $postJob->save();

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
