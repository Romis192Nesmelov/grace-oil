<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image',50)->nullable();
            $table->string('town_ru',50)->nullable();
            $table->string('town_en',50)->nullable();
            $table->string('name_ru',50)->unique();
            $table->string('name_en',50)->unique();
            $table->string('phone',20)->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->boolean('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dealers');
    }
}
