<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('slug');
            $table->string('head_ru');
            $table->string('head_en');
            $table->integer('time');
            $table->text('text_short_ru');
            $table->text('text_short_en');
            $table->longText('text_full_ru');
            $table->longText('text_full_en');
            $table->boolean('active');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE news ADD FULLTEXT search(head_ru,head_en,text_short_ru,text_short_en)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function($table) {
            $table->dropIndex('search');
        });
        Schema::dropIfExists('news');
    }
}
