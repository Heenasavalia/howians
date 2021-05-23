<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->foreign('company_id')->references('id')->on('company');
            $table->integer('job_id')->nullable();
            $table->foreign('job_id')->references('id')->on('job_requirements');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('message');
            $table->boolean('isread')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
