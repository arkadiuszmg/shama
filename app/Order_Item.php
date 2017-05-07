<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    protected $table = 'order_items';

    protected $fillable = ['id', 'order_id', 'menu_id', 'created_at', 'updated_at'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
