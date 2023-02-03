<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReviewIdToReviewToSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::table('review_to_solutions', function (Blueprint $table) {
//            $table->integer('review_id', false, true);
//            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade')->onUpdate('cascade');
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
//            $table->dropForeign('review_to_solutions_review_id_foreign');
//            $table->dropColumn('review_id');
//        });
//    }
}
