<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMenuIdToHomeBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::table('home_blocks', function (Blueprint $table) {
//            $table->integer('menu_id', false, true)->nullable();
//            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade')->onUpdate('cascade');
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
//        Schema::table('home_blocks', function (Blueprint $table) {
//            $table->dropForeign('home_blocks_menu_id_foreign');
//            $table->dropColumn('menu_id');
//        });
//    }
}
