<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitleSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title_settings', function (Blueprint $table) {
            $table->id();
            $table->string('about_title')->nullable();
            $table->string('service_title')->nullable();
            $table->string('service_details_title')->nullable();
            $table->string('blog_title')->nullable();
            $table->string('blog_details_title')->nullable();
            $table->string('team_title')->nullable();
            $table->string('team_details_title')->nullable();
            $table->string('testimonial_title')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('faq_title')->nullable();
            $table->string('feature_title')->nullable();
            $table->string('gallery_title')->nullable();
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
        Schema::dropIfExists('title_settings');
    }
}
