<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileEE()
    {
        $info = DB::table('users')
                    ->where('users.id', '=', Auth::id())
                    ->join('employees','users.id','employees.employee_id')
                    ->select('users.name','employees.*')
                    ->get();
        // dd($info);
        $countCV =  DB::table('resumes')->where('user_id', Auth::id())->count();
        $countBM =  DB::table('bookmark_post_jobs')->where('user_id', Auth::id())->count();
        return view('employee/account/showInfo',[
            'countCV' => $countCV,
            'countBM' => $countBM,
            'info' => $info[0],
        ]);
    }
    public function profileEE_Edit()
    {
        $info = DB::table('users')
                    ->where('users.id', '=', Auth::id())
                    ->join('employees','users.id','employees.employee_id')
                    ->select('users.name','employees.*')
                    ->get();
                    // dd($info);
        return view('employee/account/editInfo',[
            'info'=>$info[0],
        ]);
    }
    public function profileEE_Update(Request $request)
    {
        $validated = $request->validate([
            'avatar_profile' => 'image|mimes:jpeg,png,jpg,svg|max:102400',
            'phone_num' => 'max:12|min:10',
        ]);
        if ($request->file('avatar_profile') !== null) {
            $avatar_profile = $request->file('avatar_profile')->getClientOriginalName();
            $avatar_profile = Str::random(30) . $avatar_profile;
            $resizeImage = Image::make($request->file('avatar_profile')->getRealPath());
            $resizeImage->fit(150)->save('avatar_profile/ee' . $avatar_profile, 100);
            DB::table('employees')
            ->where('employee_id', '=', Auth::id())
            ->update(['avatar_profile'=>$avatar_profile]);
        }
        DB::table('employees')
            ->where('employee_id', '=', Auth::id())
            ->update([
                'birthday' => $request->birthday,
                'position' => $request->position,
                'intro_self' => $request->intro_self,
                'phone_num' => $request->phone_num,
                'current_address' => $request->current_address,
                'current_salary' => $request->current_salary,
                'desired_salary' => $request->desired_salary,
                'status_findJob' => $request->status_findJob,
            ]);
        return redirect()->back()->with('message','Đã lưu thông tin!!');
    }

    // profile employer
    public function profileER()
    {
        $info = DB::table('employers')
                    ->where('employers.employer_id', '=', Auth::id())
                    ->join('cities','employers.location','cities.city_code')
                    ->join('company_sizes','employers.company_size','company_sizes.id')
                    ->select('employers.*','cities.city_name','company_sizes.size')
                    ->get();
        // dd($info);
        $countPJob =  DB::table('post_jobs')->where('employer_id', Auth::id())->count();
        return view('employer/account/showInfo',[
            'countPJob' => $countPJob,
            'info' => $info[0],
        ]);
    }
    public function profileER_Edit()
    {
        $info = DB::table('users')
                    ->where('users.id', '=', Auth::id())
                    ->join('employers','users.id','employers.employer_id')
                    ->select('users.name','employers.*')
                    ->get();
                    // dd($info);
        $cities = DB::table('cities')->get();
        $companySizes= DB::table('company_sizes')->get();
        return view('employer/account/editInfo',[
            'info'=>$info[0],
            'cities'=>$cities,
            'companySizes'=>$companySizes,
        ]);
    }
    public function profileER_Update(Request $request)
    {
        $validated = $request->validate([
            'avatar_profile' => 'image|mimes:jpeg,png,jpg,svg|max:102400',
        ]);
        if ($request->file('company_logo') !== null) {
            $company_logo = $request->file('company_logo')->getClientOriginalName();
            $company_logo = Str::random(30) . $company_logo;
            $resizeImage = Image::make($request->file('company_logo')->getRealPath());
            $resizeImage->fit(150)->save('company_logo/ee' . $company_logo, 100);
            DB::table('employers')
            ->where('employee_id', '=', Auth::id())
            ->update(['company_logo'=>$company_logo]);
        }
        DB::table('employers')
            ->where('employer_id', '=', Auth::id())
            ->update([
                "company_name" => $request->company_name,
                "company_size" => $request->company_size,
                "tax" => $request->tax,
                "website" => $request->website,
                "company_summary" => $request->company_summary,
                "contact_name"=>$request->contact_name,
                "position" => $request->position,
                "company_address" => $request->company_address,
                "company_phone"=> $request->company_phone,
                "location"=> $request->location,
            ]);
        return redirect()->back()->with('message','Đã lưu thông tin!!');
    }
}
