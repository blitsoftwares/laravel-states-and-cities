<?php

namespace Blit\StatesAndCities\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    protected $fillable = [
        'city_id',
        'name',
        'street',
        'number',
        'complement',
        'district',
        'postal_code'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}