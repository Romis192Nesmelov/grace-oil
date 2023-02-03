<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewsIdToSimilarNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::table('similar_news', function (Blueprint $table) {
//            $table->integer('news_id', false, true);
//            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade')->onUpdate('cascade');
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
//            $table->dropForeign('similar_news_news_id_foreign');
//            $table->dropColumn('news_id');
//        });
//    }
}
