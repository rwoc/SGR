<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table = "recursos";
    protected $fillable = ['cod_tomb', 'nome_recurso','descricao_recurso','obs_recurso','id_tipo'];


    public function tipo()
    {
        return $this->hasOne(Tipo::class);
    }


    public function reservas()
    {
        return $this->belongsToMany(Reserva::class);
    }

}
