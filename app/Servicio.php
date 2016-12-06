<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'strDescripcion', 'sector_id',
    ];

    public function sector()
    {
    	return $this->belongsTo(Sector::class);
    }

    public function servicioBuscados()
    {
        return $this->hasMany(ServicioBuscado::class);
    }
    public function servicioSolicitados()
    {
        return $this->hasMany(ServicioSolicitado::class);
    }
}
