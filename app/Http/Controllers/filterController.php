<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class filterController extends Controller
{
    public function regex($sChar, $string)
    {
        $regex = "/(?<=$sChar)[!&a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂẾưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ-]*(?(?=\+(?:nn|vt|dd)))/";
        if (preg_match($regex, $string)) {
            preg_match($regex, $string, $value);
            return str_replace(["!", "&",], [" ", "/"], $value[0]);
        } else {
            return "undefined";
        }
    }
    public function search($string)
    {
        $location = $this->regex("dd-", $string);
        $position = $this->regex("vt-", $string);
        $industry = $this->regex("nn-", $string);
        $postJobs = DB::table('post_jobs')
            ->join('employers', 'post_jobs.employer_id', '=', 'employers.employer_id')
            ->where(function ($query) use ($location, $position, $industry) {

                if ($location != "undefined") {
                    $query->where('post_jobs.location', '=', $location);
                }
                if ($industry != "undefined") {
                    $query->where('post_jobs.hire_industry', '=', $industry);
                }
                if ($position != "undefined") {
                    $query->where('post_jobs.hire_position', 'like', "%$position%");
                }
            })
            ->select('post_jobs.*', 'employers.company_logo')
            ->orderByDesc('post_jobs.created_at')->paginate(20);
        $cities = DB::table('cities')->get();
        $industries = DB::table('industries')->get();
        $hirePositions = DB::table('hire_positions')->get();
        return view('employee.findJob', [
            'post_jobs' => $postJobs,
            'cities' => $cities,
            'industries' => $industries,
            'hirePositions'=>$hirePositions,
        ]);
    }
}
