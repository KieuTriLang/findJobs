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
        return view('employee/account/showInfo',[
            'countCV' => $countCV,
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
            'info'=>$info,
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
}
