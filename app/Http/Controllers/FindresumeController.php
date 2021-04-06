<?php

namespace App\Http\Controllers;

use App\Models\findresume;
use Illuminate\Http\Request;

class FindresumeController extends Controller
{
    //
    function getData()
    {
        return findresume::all();
    }
}
