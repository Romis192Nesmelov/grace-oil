<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOilTypeIdToOilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oil', function (Blueprint $table) {
            $table->integer('oil_type_id', false, true);
            $table->foreign('oil_type_id')->references('id')->on('oil_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oil', function (Blueprint $table) {
            $table->dropForeign('oil_oil_type_id_foreign');
            $table->dropColumn('oil_type_id');
        });
    }
}
