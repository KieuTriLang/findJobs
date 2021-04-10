<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employer_id');
            $table->string('company_name');
            $table->string('company_size');
            $table->string('tax')->nullable();
            $table->string('website');
            $table->longText('company_summary')->nullable();
            $table->longText('company_logo');
            $table->string('contact_name');
            $table->string('position');
            $table->string('company_address');
            $table->string('company_phone');
            $table->timestamps();

            $table->foreign('employer_id')
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
        Schema::dropIfExists('employers');
    }
}
