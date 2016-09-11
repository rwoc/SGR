<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('recursos', function (Blueprint $table) {
            $table->foreign('id_tipo')->references('id_tipo')->on('tipos');
        });

        Schema::table('reservas', function (Blueprint $table) {
            $table->foreign('cod_tomb_reserva')->references('cod_tomb')->on('recursos');
        });

        Schema::table('recurso_reserva', function (Blueprint $table) {
            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->foreign('recurso_id')->references('id')->on('recursos');
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
