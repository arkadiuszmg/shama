<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['id', 'name', 'comments', 'price', 'photo_id', 'restaurant_id', 'created_at', 'updated_at'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }
}
