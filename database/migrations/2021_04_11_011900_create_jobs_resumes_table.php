<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_resumes', function (Blueprint $table) {
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('resume_id');
            $table->timestamps();
            $table->foreign('job_id')->references('id')->on('post_jobs')->onDelete('cascade');
            $table->foreign('resume_id')->references('id')->on('resumes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs_resumes');
    }
}
