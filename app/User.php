<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'language_id', 'ubicacion_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class);
    }

    public function servicioBuscado()
    {
        return $this->hasMany(ServicioBuscado::class);
    }
    public function servicioSolicitado()
    {
        return $this->hasMany(ServicioSolicitado::class);
    }
}
