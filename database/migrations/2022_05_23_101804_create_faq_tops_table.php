<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqTopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_tops', function (Blueprint $table) {
            $table->id();
            $table->string('title_one');
            $table->longText('description_one');
            $table->string('title_two');
            $table->longText('description_two');
            $table->string('title_three');
            $table->longText('description_three');
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
        Schema::dropIfExists('faq_tops');
    }
}
