<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Exemplo extends Migration
{
    public function up()
    {
        Schema::create('exemplo', function(Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
        });

    }

    public function down()
    {
        Schema::dropIfExists('exemplo');
    }
}
