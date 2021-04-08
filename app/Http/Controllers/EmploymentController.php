<?php

namespace App\Http\Controllers;

use App\Models\Employment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmploymentController extends Controller
{
    //
    function getData(){
        $employment = DB::table('employments')->paginate(10);
        return $this->render($employment);
    }
    public function render($employment){
        return view('employee.findJob',['employment'=>$employment]);
    }
}
