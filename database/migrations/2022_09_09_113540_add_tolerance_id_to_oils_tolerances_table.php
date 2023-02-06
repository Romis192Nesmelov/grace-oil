<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToleranceIdToOilsTolerancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::table('oil_tolerances', function (Blueprint $table) {
//            $table->integer('tolerance_id', false, true);
//            $table->foreign('tolerance_id')->references('id')->on('tolerances')->onDelete('cascade')->onUpdate('cascade');
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
//        Schema::table('oil_tolerances', function (Blueprint $table) {
//            $table->dropForeign('oil_tolerances_tolerance_id_foreign');
//            $table->dropColumn('tolerance_id');
//        });
//    }
}
