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

    public function scopeByCountry($query,$country)
    {
        return $query->where('country_id',$country);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cities()
    {
       return $this->hasMany(City::class);
    }

    public function addresses()
    {
        return $this->hasManyThrough(Address::class,City::class);
    }

}