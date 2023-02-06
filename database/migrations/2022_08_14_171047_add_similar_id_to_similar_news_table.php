<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSimilarIdToSimilarNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::table('similar_news', function (Blueprint $table) {
//            $table->integer('similar_id', false, true);
//            $table->foreign('similar_id')->references('id')->on('news')->onDelete('cascade')->onUpdate('cascade');
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
//        Schema::table('similar_news', function (Blueprint $table) {
//            $table->dropForeign('similar_news_similar_id_foreign');
//            $table->dropColumn('similar_id');
//        });
//    }
}
