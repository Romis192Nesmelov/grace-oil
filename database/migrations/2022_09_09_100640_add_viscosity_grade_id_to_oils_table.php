<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddViscosityGradeIdToOilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::table('oil', function (Blueprint $table) {
//            $table->integer('viscosity_grade_id', false, true);
//            $table->foreign('viscosity_grade_id')->references('id')->on('viscosity_grades')->onDelete('cascade')->onUpdate('cascade');
//        });
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
//    public function down()
//    {
//        Schema::table('oil', function (Blueprint $table) {
//            $table->dropForeign('oil_viscosity_grade_id_foreign');
//            $table->dropColumn('viscosity_grade_id');
//        });
//    }
}
