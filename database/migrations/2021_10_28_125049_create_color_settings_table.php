<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_settings', function (Blueprint $table) {
            $table->id();
            $table->string('theme_color');
            $table->string('theme_menu_text_color');
            $table->string('theme_header_background');
            $table->string('theme_footer_background');
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
        Schema::dropIfExists('color_settings');
    }
}
