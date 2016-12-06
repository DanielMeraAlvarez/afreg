<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	protected $fillable = [
        'strNombre', 'strDescripcion',
    ];


    public function users()
    {
        return $this->hasMany(User::class);
    }

}
