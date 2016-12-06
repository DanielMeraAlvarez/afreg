<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioBuscado extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'strComentario', 'user_id', 'ubicacion_id','servicio_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function ubicacion()
    {
    	return $this->belongsTo(Ubicacion::class);
    }
    
    public function servicio()
    {
    	return $this->belongsTo(Servicio::class);
    }
}
