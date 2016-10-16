<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement('
            CREATE TABLE IF NOT EXISTS `usuarios` (
            `id` INT NOT NULL AUTO_INCREMENT COMMENT \'	\',
            `nome` VARCHAR(45) NOT NULL,
            `email` VARCHAR(200) NOT NULL,
            `senha` VARCHAR(255) NOT NULL,
            `updated_at` DATETIME NULL,
            `created_at` DATETIME NULL,
            PRIMARY KEY (`id`))
            ENGINE = InnoDB
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement('DROP TABLE `usuarios`;');
    }
}
