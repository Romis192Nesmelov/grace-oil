<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBrochureIdToAboutProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//    public function up()
//    {
//        Schema::table('about_products', function (Blueprint $table) {
//            $table->integer('brochure_id', false, true);
//            $table->foreign('brochure_id')->references('id')->on('brochures')->onDelete('cascade')->onUpdate('cascade');
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
//        Schema::table('about_products', function (Blueprint $table) {
//            $table->dropForeign('about_products_brochure_id_foreign');
//            $table->dropColumn('brochure_id');
//        });
//    }
}
