<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsurioColunaDeletedAt extends Migration
{
    public function up()
    {
		Schema::table('usuarios', function(Blueprint $table) {
			$table->datetime('deleted_at')->nullable();
		});	
    }

    public function down()
    {
		Schema::table('usuarios', function(Blueprint $table) {
			$table->dropColumn('deleted_at');
		});	
    }
}
