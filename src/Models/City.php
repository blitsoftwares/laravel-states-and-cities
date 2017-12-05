<?php

namespace Blit\StatesAndCities\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

    protected $fillable = [
        'state_id',
        'code',
        'name'
    ];

    public function scopeByState($query,$state)
    {
        return $query->where('state_id',$state);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

}