<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddManagerIdToMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::table('menus', function (Blueprint $table) {
//            $table->integer('manager_id', false, true)->nullable();
//            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade')->onUpdate('cascade');
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
//        Schema::table('menus', function (Blueprint $table) {
//            $table->dropForeign('menus_manager_id_foreign');
//            $table->dropColumn('manager_id');
//        });
//    }
}
