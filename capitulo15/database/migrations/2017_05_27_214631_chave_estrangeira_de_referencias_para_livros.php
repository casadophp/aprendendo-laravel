<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChaveEstrangeiraDeReferenciasParaLivros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('referencias', function (Blueprint $table) {
            $table->foreign('livro_id')->references('id')->on('livro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('referencias', function (Blueprint $table) {
            $table->dropForeign('referencias_livro_id_foreign');
        });
    }
}
