<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('post_jobs');
        Schema::create('post_jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employer_id');

            $table->string('hire_logo');
            $table->string('hire_position');
            $table->string('company_name');
            $table->string('description');
            $table->string('hardskills');
            $table->string('softskills');
            $table->string('salary');
            $table->string('location');
            $table->timestamps();

            $table->foreign('employer_id')
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
        Schema::dropIfExists('post_jobs');
    }
}
