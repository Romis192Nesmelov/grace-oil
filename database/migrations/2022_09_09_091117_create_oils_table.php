<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oil', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('units');
            $table->string('image_base');
            $table->string('image_0_4')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->string('image_10')->nullable();
            $table->string('image_18')->nullable();
            $table->string('image_20')->nullable();
            $table->string('image_180')->nullable();
            $table->string('image_210')->nullable();
            $table->string('image_230')->nullable();
            $table->string('image_1000')->nullable();
            $table->string('slug');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('head_ru');
            $table->string('head_en');
            $table->text('description_ru');
            $table->text('description_en');
            $table->text('application_area_ru');
            $table->text('application_area_en');
            $table->text('advantages_ru');
            $table->text('advantages_en');
            $table->boolean('active');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE oil ADD FULLTEXT search(name_ru,name_en,head_ru,head_en)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oil', function($table) {
            $table->dropIndex('search');
        });
        Schema::dropIfExists('oil');
    }
}
