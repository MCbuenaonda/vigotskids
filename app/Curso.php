<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $fillable = [
        'nombre', 'slug', 'siglas', 'precio', 'activo'
    ];
    /* Relacìon 1:n de Curso a grupos */
    public function grupos() {
        return $this->hasMany(Grupo::class);
    }
}


