<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->foreign('company_id')->references('id')->on('company');
            $table->text('job_category');
            $table->text('education');
            $table->text('email');
            $table->boolean('is_display_email')->default(1);
            $table->text('title');
            $table->text('designation');
            $table->string('number_of_vacancy')->default(1)->nullable();
            $table->string('minimum_salary')->nullable();
            $table->string('maximum_salary')->nullable();
            $table->text('other_salary_detail')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('work_experience')->nullable();
            $table->enum('job_type',['part_time','full_time','freelacer'])->nullable();
            $table->enum('work_type',['online','offline'])->nullable();
            $table->longText('discription')->nullable();
            $table->longText('address')->nullable();
            $table->string('location')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('pincode')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('country');
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
        Schema::dropIfExists('job_requirements');
    }
}
