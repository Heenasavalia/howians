<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricingPlanFeturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing_paln_fetures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pricing_plan_id');
            $table->foreign('pricing_plan_id')->references('id')->on('company_plans');
            $table->integer('pricing_feture_id');
            $table->foreign('pricing_feture_id')->references('id')->on('company_plans');
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
        Schema::dropIfExists('pricing_paln_fetures');
    }
}
