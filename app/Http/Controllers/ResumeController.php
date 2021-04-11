<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\models\User;
use App\Models\Resume;
use Image;
use Storage;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $resumes = DB::table('resumes')->where('user_id', Auth::id())->select('id', 'cv_name')->orderByDesc('created_at')->get();
        $resumes= User::find(Auth::id())->resumes->sortByDesc('created_at');
        $count =  DB::table('resumes')->where('user_id', Auth::id())->count();
        return view('employee/resumeManagement/showResume', [
            'count' => $count,
            'resumes' => $resumes,
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
        $languages = DB::table('languages')->get();
        $hobbies = DB::table('hobbies')->get();
        return view('employee/resumeManagement/createResume', [
            'hardskills' => $hardskills,
            'softskills' => $softskills,
            'languages' => $languages,
            'hobbies' => $hobbies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'avatar_resume' => 'required|image|mimes:jpeg,png,jpg,svg|max:102400',
        ]);
        $avatar_resume = $request->file('avatar_resume')->getClientOriginalName();
        $avatar_resume=Str::random(30).$avatar_resume;
        $resizeImage= Image::make($request->file('avatar_resume')->getRealPath());
        $resizeImage->fit(100)->save('avatar_resume/thumbnail'.$avatar_resume,100);
        $resizeImage->fit(300)->save('avatar_resume/medium'.$avatar_resume,100);

        $resume = new Resume;
        $resume->user_id = Auth::id();
        $resume->avatar_resume = $avatar_resume;
        $resume->cv_name = $request->cv_name;
        $resume->name = $request->name;
        $resume->career_name = $request->career_name;
        $resume->email = $request->email;
        $resume->phone_num = $request->phone_num;
        $resume->birthday = $request->birthday;
        $resume->address = $request->address;
        $resume->linkedIn = $request->linkedIn;
        $resume->facebook = $request->facebook;
        $resume->skype = $request->skype;
        $resume->career_target = $request->career_target;
        $resume->work_exp = $request->work_exp;
        $resume->education = $request->education;
        $resume->activities = $request->activities;
        $resume->awards = $request->awards;
        $resume->reference = $request->reference;
        $resume->hardskills = $request->hardskills;
        $resume->softskills = $request->softskills;
        $resume->certificate = $request->certificate;
        $resume->language = $request->language;
        $resume->hobby = $request->hobby;
        $resume->save();
        return redirect('/resume');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { }

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
        $languages = DB::table('languages')->get();
        $hobbies = DB::table('hobbies')->get();
        $resume = DB::table('resumes')->where('id', "=", $id)->first();
        return view('employee/resumeManagement/editResume', [
            'resume' => $resume,
            'hardskills' => $hardskills,
            'softskills' => $softskills,
            'languages' => $languages,
            'hobbies' => $hobbies,
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
        DB::table('resumes')
            ->where('id', '=', $id)
            ->update([
                "cv_name" => $request->cv_name,
                "name" => $request->name,
                "career_name" => $request->career_name,
                "email" => $request->email,
                "phone_num" => $request->phone_num,
                "birthday" => $request->birthday,
                "address" => $request->address,
                "linkedIn" => $request->linkedIn,
                "facebook" => $request->facebook,
                "skype" => $request->skype,
                "career_target" => $request->career_target,
                "work_exp" => $request->work_exp,
                "education" => $request->education,
                "activities" => $request->activities,
                "awards" => $request->awards,
                "reference" => $request->reference,
                "hardskills" => $request->hardskills,
                "softskills" => $request->softskills,
                "certificate" => $request->certificate,
                "language" => $request->language,
                "hobby" => $request->hobby,
            ]);
            return redirect('/resume');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avatar_resume=DB::table('resumes')->where('id', '=', $id)->select('avatar_resume')->first();
        // dd($avatar_resume);
        // Storage::delete("avatar_resume/thumbnail$avatar_resume->avatar_resume");
        // Storage::delete("avatar_resume/medium$avatar_resume->avatar_resume");
        DB::table('resumes')->where('id', '=', $id)->delete();
        return redirect('/resume');
    }
}
