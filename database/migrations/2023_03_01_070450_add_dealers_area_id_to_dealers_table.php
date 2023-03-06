<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDealersAreaIdToDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dealers', function (Blueprint $table) {
            $table->integer('dealers_area_id', false, true)->nullable();
            $table->foreign('dealers_area_id')->references('id')->on('dealers_areas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dealers', function (Blueprint $table) {
            $table->dropForeign('dealers_dealers_area_id_foreign');
            $table->dropColumn('dealers_area_id');
        });
    }
}
