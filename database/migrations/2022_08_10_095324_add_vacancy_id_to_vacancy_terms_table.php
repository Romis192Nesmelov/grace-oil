<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVacancyIdToVacancyTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacancy_terms', function (Blueprint $table) {
            $table->integer('vacancy_id', false, true);
            $table->foreign('vacancy_id')->references('id')->on('vacancies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacancy_terms', function (Blueprint $table) {
            $table->dropForeign('vacancy_terms_vacancy_id_foreign');
            $table->dropColumn('vacancy_id');
        });
    }
}
