<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->longText('avatar_profile')->nullable();
            $table->string('birthday')->nullable();
            $table->string('position')->nullable();
            $table->string('intro_self')->nullable();
            $table->string('phone_num')->nullable();
            $table->string('email_contact')->nullable();
            $table->string('current_address')->nullable();
            $table->string('current_salary')->nullable();
            $table->string('desired_salary')->nullable();
            $table->string('status_findJob')->nullable();
            $table->timestamps();

            $table->foreign('employee_id')
                    ->references('id')
                    ->on('users')
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
        Schema::dropIfExists('employees');
    }
}
