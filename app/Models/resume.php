<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    protected $table='resumes';
    public function user(){
        return $this->belongsTo(User::class,'user_code','id');
    }
    public function getAllResume(){

    }
}
