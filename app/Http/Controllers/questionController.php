<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\question;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class questionController extends Controller
{
    //
    function getData()
    {
        return question::all();
    }
}
