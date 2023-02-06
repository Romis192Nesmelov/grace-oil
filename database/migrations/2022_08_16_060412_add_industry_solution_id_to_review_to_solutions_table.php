<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndustrySolutionIdToReviewToSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::table('review_to_solutions', function (Blueprint $table) {
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
//        Schema::table('review_to_solutions', function (Blueprint $table) {
//            $table->dropForeign('review_to_solutions_industry_solution_id_foreign');
//            $table->dropColumn('industry_solution_id');
//        });
//    }
}
