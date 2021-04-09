<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    public function index(){
        $data= DB::table('post_jobs')->inRandomOrder()->paginate(20);
        $quantityJob= DB::table('post_jobs')->count('id');
        return view("employee/findjob",[
            'post_jobs' => $data,
            'quantityJob'=>$quantityJob,
        ]);
    }
}
