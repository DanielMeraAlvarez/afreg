<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preguntas_y_comentarios extends Model
{
    protected $fillable = [
        'strNombre', 'strEmail', 'strMessage',
    ];
}
