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
//    public function up()
//    {
//        Schema::create('oil', function (Blueprint $table) {
//            $table->increments('id');
//            $table->boolean('units');
//            $table->string('image');
//            $table->string('slug');
//            $table->string('name_ru');
//            $table->string('name_en');
//            $table->string('head_ru');
//            $table->string('head_en');
//            $table->text('description_ru');
//            $table->text('description_en');
//            $table->text('application_area_ru');
//            $table->text('application_area_en');
//            $table->text('advantages_ru');
//            $table->text('advantages_en');
//            $table->boolean('active');
//            $table->timestamps();
//        });
//        DB::statement('ALTER TABLE oil ADD FULLTEXT search(name_ru,name_en,head_ru,head_en)');
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
//    public function down()
//    {
//        Schema::table('oil', function($table) {
//            $table->dropIndex('search');
//        });
//        Schema::dropIfExists('oil');
//    }
}
