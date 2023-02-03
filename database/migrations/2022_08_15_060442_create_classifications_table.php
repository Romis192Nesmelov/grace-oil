<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::create('classifications', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name_ru')->unique();
//            $table->string('name_en')->unique();
//            $table->text('text_ru');
//            $table->text('text_en');
//            $table->boolean('active');
//            $table->timestamps();
//        });
//        DB::statement('ALTER TABLE classifications ADD FULLTEXT search(name_ru,name_en,text_ru,text_en)');
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
//    public function down()
//    {
//        Schema::table('classifications', function($table) {
//            $table->dropIndex('search');
//        });
//        Schema::dropIfExists('classifications');
//    }
}
