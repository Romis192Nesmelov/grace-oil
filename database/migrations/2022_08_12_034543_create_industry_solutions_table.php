<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndustrySolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industry_solutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('slug');
            $table->string('name_ru')->unique();
            $table->string('name_en')->unique();
            $table->text('text_ru');
            $table->text('text_en');
            $table->string('head_ru')->unique();
            $table->string('head_en')->unique();
            $table->boolean('active');
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
        Schema::dropIfExists('industry_solutions');
    }
}
