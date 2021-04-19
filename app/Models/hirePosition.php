<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hirePosition extends Model
{
    use HasFactory;
    protected $table="hire_positions";
    public $timestamp=false;
}
