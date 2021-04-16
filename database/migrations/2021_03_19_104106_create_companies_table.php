<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('company_name')->nullable();
            $table->bigInteger('gst_number')->nullable();
            $table->longText('address')->nullable();
            $table->string('location')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('pincode')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('total_experience')->nullable();
            $table->string('years_of_establishment')->nullable();
            $table->enum('status',['Pending','Active']);
            $table->boolean('is_online')->default(0);
            $table->boolean('is_branch_available')->default(0);
            $table->string('branch_name')->nullable();
            $table->string('branch_place')->nullable();
            $table->enum('user_target',['online','offline'])->default('online');
            $table->string('no_of_employees')->nullable();
            $table->string('nearby_famous_landmark')->nullable();
            $table->string('targeted_age_group')->nullable();
            $table->boolean('is_deleted')->default(0);
            $table->dateTime('expired_at')->nullable();
            $table->rememberToken();
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
        Schema::drop('companies');
    }
}
