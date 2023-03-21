<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('mobile')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('address');
            $table->string('working_hour')->nullable();
            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('copyright');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
