<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_branches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branches_id')->constrained();
            $table->foreignId('products_id')->constrained();
            $table->decimal('sale_price', 8, 2)->default(0.01);
            $table->integer('minimum_stock')->default(1);
            $table->integer('maximum_stock')->default(1);
            $table->timestamps();
        });

        //remove colunas da tabela products
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['sale_price','minimum_stock','maximum_stock']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //adicionar colunas em products
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('sale_price', 8, 2)->default(0.01)->after('weight');
            $table->integer('minimum_stock')->default(1)->after('sale_price');
            $table->integer('maximum_stock')->default(1)->after('minimum_stock');
        });

        Schema::dropIfExists('products_branches');
    }
}
