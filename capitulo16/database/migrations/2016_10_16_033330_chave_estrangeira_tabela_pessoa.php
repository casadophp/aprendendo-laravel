<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChaveEstrangeiraTabelaPessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('telefone', function(Blueprint $table) {
            $table->foreign('pessoa_id')->references('id')->on('pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('telefone', function(Blueprint $table) {
            $table->dropForeign('telefone_pessoa_id_foreign');
        });
    }
}
