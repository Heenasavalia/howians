<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToJobRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_requirements', function (Blueprint $table) {
            $table->enum('work_experiance_type',['fresher','experienced'])->after('work_experience')->nullable();
            $table->enum('gender',['male','female','other','all'])->after('other_salary_detail');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_requirements', function (Blueprint $table) {
            //
        });
    }
}
