<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubMenuIdToHomeBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_blocks', function (Blueprint $table) {
            $table->integer('sub_menu_id', false, true)->nullable();
            $table->foreign('sub_menu_id')->references('id')->on('menus')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_blocks', function (Blueprint $table) {
            $table->dropForeign('home_blocks_sub_menu_id_foreign');
            $table->dropColumn('sub_menu_id');
        });
    }
}
