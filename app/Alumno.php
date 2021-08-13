<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'nombre','ap_paterno','ap_materno','clave','activo'
    ];

    //Recetas que el usuario le ha dado me gusta
    public function grupos() {
        return $this->belongsToMany(Grupo::class, 'grupos_alumnos');
    }
}
