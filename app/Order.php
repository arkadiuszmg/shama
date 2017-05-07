<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'restaurant_id', 'total_order_price', 'status_order', 'costumer_id', 'customer_comments', 'created_at', 'updated_at'];


    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
