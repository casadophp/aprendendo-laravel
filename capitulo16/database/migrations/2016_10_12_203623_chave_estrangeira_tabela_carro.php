<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChaveEstrangeiraTabelaCarro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marca', function(Blueprint $table) {
            $table->foreign('carro_id')->references('id')->on('carro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marca', function(Blueprint $table) {
            $table->dropForeign('marca_carro_id_foreign');
        });
    }
}
