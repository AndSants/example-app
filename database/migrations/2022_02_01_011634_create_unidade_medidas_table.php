<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadeMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidade_medidas', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        //relacionamento com produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_medida_id');
            $table->foreign('unidade_medida_id')->references('id')->on('unidade_medidas');
        });
        //relacionamento com produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_medida_id');
            $table->foreign('unidade_medida_id')->references('id')->on('unidade_medidas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remove relacionamento com produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->dropForeign('produto_detalhes_unidade_medida_id_foreign');
            $table->dropColumn('unidade_medida_id');
        });
        //remove relacionamento com produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign('produtos_unidade_medida_id_foreign');
            $table->dropColumn('unidade_medida_id');
        });

        Schema::dropIfExists('unidade_medidas');
    }
}
