<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostJob extends Model
{
    use HasFactory;
    protected $table="post_jobs";
    public function resumes(){
        return $this->belongsToMany(Resume::class,'jobs_resumes');
    }
}
