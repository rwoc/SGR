<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{

    public function up()
    {
        Schema::create('reservas', function (Blueprint $table){
            $table->increments('id');
            $table->String('nome_recurso',4);
        });
    }


    public function down()
    {

    }
}
