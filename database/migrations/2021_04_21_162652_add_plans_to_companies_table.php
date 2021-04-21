<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlansToCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->boolean('is_select_plan')->after('country')->default(0);
            $table->boolean('pricing_plan_id')->after('is_select_plan')->nullable();
            $table->foreign('pricing_plan_id')->references('id')->on('pricing_plans');
            $table->dateTime('start_time')->after('pricing_plan_id')->nullable();
            $table->dateTime('end_time')->after('start_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            //
        });
    }
}
