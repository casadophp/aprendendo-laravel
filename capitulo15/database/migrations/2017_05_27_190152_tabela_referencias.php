<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaReferencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referencias', function(Blueprint $table) {
            $table->integer('id', true);
            $table->string('autor', 100);
            $table->enum('veiculo', ['revista', 'jornal', 'blog']);
            $table->dateTime('acessado_em');
            $table->integer('livro_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('referencias');
    }
}
