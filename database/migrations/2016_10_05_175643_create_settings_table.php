<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('site_descriptions');
            $table->string('seo_title')->nullable()->default(null);
            $table->string('seo_description')->nullable()->default(null);
            $table->string('seo_image')->nullable()->default(null);
            $table->string('google_analytics_id')->nullable()->default(null);
            $table->string('google_analytics_userId')->nullable()->default(null);
            $table->boolean('maintance')->default(0);
            $table->string('contact_email');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
