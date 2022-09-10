<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubsectionIdToOilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oil', function (Blueprint $table) {
            $table->integer('subsection_id', false, true)->nullable();
            $table->foreign('subsection_id')->references('id')->on('subsections')->onDelete('cascade')->onUpdate('cascade');
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
            $table->dropForeign('oil_subsection_id_foreign');
            $table->dropColumn('subsection_id');
        });
    }
}
