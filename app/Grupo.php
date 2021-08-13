<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'nombre', 'curso_id', 'fecha', 'status_id'
    ];

    /* Relacìon 1:1 de Grupo a Curso */
    public function curso() {
        return $this->belongsTo(Curso::class);
    }

    public function status() {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    //Likes de una receta
    public function alumnos() {
        return $this->belongsToMany(Alumno::class, 'grupos_alumnos');
    }

}
