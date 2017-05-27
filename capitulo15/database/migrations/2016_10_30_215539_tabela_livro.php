<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaLivro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('livro', function(Blueprint $table) {
            $table->integer('id', true);
		    $table->string('titulo', 100);
            $table->text('descricao');
            $table->date('data_publicacao');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('livro');
    }
}
