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

            $table->string('hire_position');
            $table->string('company_name');
            $table->longText('description');
            $table->longText('hardskills')->nullable();
            $table->longtext('softskills')->nullable();
            $table->longtext('another_des')->nullable();
            $table->longText('benefit');
            $table->string('salary');
            $table->string('location');
            $table->date('created_at');
            $table->date('updated_at');

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
