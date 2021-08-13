<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function grupos() {
        return $this->hasMany(Grupo::class);
    }
}
