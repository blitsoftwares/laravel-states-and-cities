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

    public function scopeCode($query,$code)
    {
        if (is_numeric($code)){
           $qry = $query->where('id',$code);
        } elseif (is_string($code)) {
            $qry = $query->where('code_iso2',$code);
        }

        return $qry;
    }


    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class,State::class);
    }

}