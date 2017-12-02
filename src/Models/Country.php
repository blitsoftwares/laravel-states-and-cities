<?php

namespace Blit\StatesAndCities\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

    protected $fillable = [
        'code_iso2',
        'code_iso3',
        'name',
        'code_phone',
        'lang',
    ];

    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class,State::class);
    }

}