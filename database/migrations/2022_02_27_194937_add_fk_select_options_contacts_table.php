<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddFkSelectOptionsContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criar a nova coluna
        Schema::table('contacts', function (Blueprint $table) {
            $table->foreignId('select_options_id')->after('id')->constrained();
        });
        //criando a fk e remove a coluna antiga
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('reason_contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //cria a coluna antiga
        Schema::table('contacts', function (Blueprint $table) {
            $table->integer('reason_contact')->after('email');
        });
        //remove a fk e coluna nova
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropForeign('contacts_select_options_id_foreign');
            $table->dropColumn('select_options_id');
        });
    }
}
