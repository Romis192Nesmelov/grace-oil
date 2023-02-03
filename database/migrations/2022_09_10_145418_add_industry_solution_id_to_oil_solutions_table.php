<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndustrySolutionIdToOilSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::table('oil_solutions', function (Blueprint $table) {
//            $table->integer('industry_solution_id', false, true);
//            $table->foreign('industry_solution_id')->references('id')->on('industry_solutions')->onDelete('cascade')->onUpdate('cascade');
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
//        Schema::table('oil_solutions', function (Blueprint $table) {
//            $table->dropForeign('oil_solutions_industry_solution_id_foreign');
//            $table->dropColumn('industry_solution_id');
//        });
//    }
}
