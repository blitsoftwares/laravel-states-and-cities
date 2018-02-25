<?php

namespace Blit\StatesAndCities\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

    protected $fillable = [
        'state_id',
        'code',
        'name'
    ];

    /**
     * @param $query
     * @param $state
     * @return mixed
     */
    public function scopeByState($query,$state)
    {
        return $query->where('state_id',$state);
    }

    /**
     * @param $query
     * @param $code
     * @return mixed
     */
    public function scopeByCode($query,$code)
    {
        return $query->where('code',intval($code));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

}