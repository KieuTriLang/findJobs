<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;

class questionController extends Controller
{
    //
    function getData()
    {
        return question::all();
    }
}
