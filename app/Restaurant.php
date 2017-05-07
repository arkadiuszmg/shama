<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['id', 'name', 'address', 'phone', 'city_id', 'created_at', 'updated_at', 'open'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
