<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ru')->unique();
            $table->string('name_en')->unique();
            $table->string('about_program_ru')->unique();
            $table->string('about_program_en')->unique();
            $table->string('for_whom_ru')->unique();
            $table->string('for_whom_en')->unique();
            $table->text('advantages_ru');
            $table->text('advantages_en');
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
        Schema::dropIfExists('partner_programs');
    }
}
