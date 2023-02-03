<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOilIdToOilsTolerancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::table('oil_tolerances', function (Blueprint $table) {
//            $table->integer('oil_id', false, true);
//            $table->foreign('oil_id')->references('id')->on('oil')->onDelete('cascade')->onUpdate('cascade');
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
//            $table->dropForeign('oil_tolerances_oil_id_foreign');
//            $table->dropColumn('oil_id');
//        });
//    }
}
