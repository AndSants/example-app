<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_measures', function (Blueprint $table) {
            $table->id();
            $table->string('unit', 5);
            $table->string('description', 30);
            $table->timestamps();
        });

        //relacionamento com produtos
        Schema::table('products', function (Blueprint $table) {
           $table->foreignId('unit_measures_id')->after('id')->constrained();
            //$table->unsignedBigInteger('unidade_medida_id');
            //$table->foreign('unidade_medida_id')->references('id')->on('unidade_medidas');
        });
        //relacionamento com product_details
        Schema::table('product_details', function (Blueprint $table) {
           $table->foreignId('unit_measures_id')->after('id')->constrained();
            // $table->unsignedBigInteger('unidade_medida_id');
            // $table->foreign('unidade_medida_id')->references('id')->on('unidade_medidas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remove relacionamento com product_details
        Schema::table('product_details', function (Blueprint $table) {
           $table->dropForeign('product_details_unit_measures_id_foreign');
           $table->dropColumn('unit_measures_id');
        });
        //remove relacionamento com produtos
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_unit_measures_id_foreign');
            $table->dropColumn('unit_measures_id');
        });

        Schema::dropIfExists('unit_measures');
    }
}
