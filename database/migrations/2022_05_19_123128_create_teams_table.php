<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *<div class="env"></div>
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->string('team_slug');
            $table->string('member_designation');
            $table->longText('member_details');
            $table->string('member_phone');
            $table->string('member_email');
            $table->string('expertise_name_one')->nullable();
            $table->string('expertise_percent_one')->nullable();
            $table->string('expertise_name_two')->nullable();
            $table->string('expertise_percent_two')->nullable();
            $table->string('expertise_name_three')->nullable();
            $table->string('expertise_percent_three')->nullable();
            $table->string('expertise_name_four')->nullable();
            $table->string('expertise_percent_four')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('google_plus_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('member_photo')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
