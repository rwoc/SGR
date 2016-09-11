<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = "tipos";
    protected $fillable = ['tipo_recurso'];

    public function recursos()
    {
        return $this->belongsTo(Recurso::class);
    }
}
