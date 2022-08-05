<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactuses', function (Blueprint $table) {
            $table->id();
            $table->string('contact_title1');
            $table->string('new_accounts')->nullable();
            $table->string('contact_support');
            $table->string('contact_icon1')->nullable();
            $table->string('contact_title2');
            $table->string('email_one');
            $table->string('email_two')->nullable();
            $table->string('contact_icon2')->nullable();
            $table->string('contact_title3');
            $table->text('contact_address');
            $table->text('contact_address_two')->nullable();
            $table->string('contact_icon3')->nullable();
            
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
        Schema::dropIfExists('contactuses');
    }
}
