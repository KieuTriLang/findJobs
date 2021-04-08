<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    protected $table='employers';

    public $timestamps=false;


    public function users(){
        return $this->belongsTo(User::class,'employer_code','user_code');
    }
}
