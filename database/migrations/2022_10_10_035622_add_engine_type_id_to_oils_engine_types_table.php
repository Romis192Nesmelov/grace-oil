<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEngineTypeIdToOilsEngineTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oil_engine_types', function (Blueprint $table) {
            $table->integer('engine_type_id', false, true);
            $table->foreign('engine_type_id')->references('id')->on('engine_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oil_engine_types', function (Blueprint $table) {
            $table->dropForeign('oil_engine_types_engine_type_id_foreign');
            $table->dropColumn('engine_type_id');
        });
    }
}
