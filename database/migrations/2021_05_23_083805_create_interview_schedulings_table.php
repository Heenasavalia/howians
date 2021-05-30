<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewSchedulingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_schedulings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->integer('job_requirement_id');
            $table->foreign('job_requirement_id')->references('id')->on('job_requirements');
            $table->time('interview_time');
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
        Schema::dropIfExists('interview_schedulings');
    }
}
