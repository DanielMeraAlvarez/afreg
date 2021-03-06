<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'strDescripcion','id',
    ];

    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }
}
