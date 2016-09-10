<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('recursos', function (Blueprint $table) {
           $table->integer('cod_tomb',30)->unique();
           $table->string('nome_recurso',30);
           $table->string('descricao_recurso', 30);
           $table->string('obs_recurso', 100);
           $table->unsignedInteger('id_tipo');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
