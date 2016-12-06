<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'latitud', 'longitud',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
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
