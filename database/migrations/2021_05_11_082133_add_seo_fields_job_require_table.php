<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeoFieldsJobRequireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_requirements', function (Blueprint $table) {
            $table->string('meta_tags')->after('country')->nullable();
            $table->longText('meta_description')->after('meta_tags')->nullable();
            $table->string('focus_keyword')->after('meta_description')->nullable();
            $table->longText('canonical_url')->after('focus_keyword')->nullable();
            $table->longText('meta_robots')->after('canonical_url')->nullable();
            $table->longText('search_synonyms')->after('meta_robots')->nullable();
            $table->text('updated_by')->after('search_synonyms')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
