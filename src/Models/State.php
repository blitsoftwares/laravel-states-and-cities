<?php

namespace Blit\StatesAndCities\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

    protected $fillable = [
        'country_id',
        'ibge',
        'name',
        'code'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}