<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class questionController extends Controller
{
    //
    public function employeeFaq(){
        $faq=DB::table('questions')->get();
        return view('employee/faq',[
            'faqs' => $faq,
        ]);
    }
    public function employerFaq(){
        return view('employer/faq');
    }
}
