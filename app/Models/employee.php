<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table="employees";
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function bookmarked_post_jobs(){
        return $this->belongsToMany(PostJob::class,'bookmark_post_jobs');
    }
}
