<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = "reservas";
    protected $fillable = ['cod_tomb', 'nome_recurso','descricao_recurso','obs_recurso','id_tipo','status'];

    public function recursos()
    {
        return $this->belongsToMany(Recurso::class);
    }
}
