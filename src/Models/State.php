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

    public function scopeCode($query,$code)
    {
        if (is_numeric($code)){
            $qry = $query->where('id',$code);
        } elseif (is_string($code)) {
            $qry = $query->where('code',$code);
        }

        return $qry;
    }

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