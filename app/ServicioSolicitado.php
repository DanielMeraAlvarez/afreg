<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioSolicitado extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'strOpinion', 'servicio_id', 'ubicacion_id', 'user_id', 'serviciosSimilares', 'recibirInformacion',
    ];

    public function servicio()
    {
    	return $this->belongsTo(Servicio::class);
    }

    public function ubicacion()
    {
    	return $this->belongsTo(Ubicacion::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
