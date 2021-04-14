<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmarkPostJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookmark_post_jobs', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('post_job_id');

            $table->foreign('employee_id')
                    ->references('employee_id')
                    ->on('employees')
                    ->onDelete('cascade');
            $table->foreign('post_job_id')
                    ->references('id')
                    ->on('post_jobs')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookmark_post_jobs');
    }
}
