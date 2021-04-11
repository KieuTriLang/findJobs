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
            $table->unsignedBigInteger('user_id');
            $table->longText('avatar_resume');
            $table->string('cv_name')->nullable();
            $table->string('name')->nullable();
            $table->string('career_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_num')->nullable();
            $table->string('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->string('career_target')->nullable();
            $table->longText('work_exp')->nullable();
            $table->longText('education')->nullable();
            $table->longText('activities')->nullable();
            $table->longText('awards')->nullable();
            $table->longText('reference')->nullable();
            $table->longText('hardskills')->nullable();
            $table->longText('softskills')->nullable();
            $table->longText('certificate')->nullable();
            $table->longText('language')->nullable();
            $table->longText('hobby')->nullable();

            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
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
