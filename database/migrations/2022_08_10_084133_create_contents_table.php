<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::create('contents', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('preview')->nullable();
//            $table->string('full')->nullable();
//            $table->longText('head_ru')->nullable();
//            $table->longText('head_en')->nullable();
//            $table->longText('text_ru');
//            $table->longText('text_en');
//            $table->boolean('active');
//            $table->timestamps();
//        });
//        DB::statement('ALTER TABLE contents ADD FULLTEXT search(head_ru,head_en,text_ru,text_en)');
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
//    public function down()
//    {
//        Schema::table('contents', function($table) {
//            $table->dropIndex('search');
//        });
//        Schema::dropIfExists('contents');
//    }
}
