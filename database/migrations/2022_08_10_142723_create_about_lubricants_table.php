<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutLubricantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_lubricants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('head_ru');
            $table->string('head_en');
            $table->text('text_ru');
            $table->text('text_en');
            $table->boolean('active');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE about_lubricants ADD FULLTEXT search(head_ru,head_en,text_ru,text_en)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_lubricants', function($table) {
            $table->dropIndex('search');
        });
        Schema::dropIfExists('about_lubricants');
    }
}
