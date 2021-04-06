<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('user_code');
            $table->string('post_code')->nullable();
            $table->string('cv_name');
            $table->string('name');
            $table->string('career_name');
            $table->string('email');
            $table->string('phone_num');
            $table->string('birthday');
            $table->string('address');
            $table->string('linkedIn')->nullable();
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->string('career_target');
            $table->string('work_exp');
            $table->string('education');
            $table->string('activities');
            $table->string('awards');
            $table->string('reference');
            $table->string('skills');
            $table->string('softskills');
            $table->string('certificate');
            $table->string('language');
            $table->string('hobby');

            $table->timestamps();

            $table->foreign('user_code')
                    ->references('user_code')
                    ->on('users');
            $table->foreign('post_code')
                    ->references('post_code')
                    ->on('post_jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumes');
    }
}
