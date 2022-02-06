<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('products_id')->constrained();
            //$table->unsignedBigInteger('produto_id');
            $table->float('length', 8, 2);
            $table->float('width', 8, 2);
            $table->float('height', 8, 2);
            $table->timestamps();

            //constraint
            //$table->foreign('produto_id')->references('id')->on('produtos');
            //$table->unique('produto_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropForeign('product_details_products_id_foreign');
            $table->dropColumn('products_id');
        });

        Schema::dropIfExists('product_details');
    }
}
