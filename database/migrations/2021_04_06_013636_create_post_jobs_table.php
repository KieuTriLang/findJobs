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
        Schema::create('post_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('employer_code');
            $table->string('post_code')->primary();

            $table->string('company_logo');
            $table->string('hire_position');
            $table->string('company_name');
            $table->string('description');
            $table->string('require_skill');
            $table->string('salary');
            $table->string('location');
            $table->timestamps();

            $table->foreign('employer_code')
                    ->references('user_code')
                    ->on('user');
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
