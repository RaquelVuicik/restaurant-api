<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'dish_id',
        'quantity',
        'unit_price',
        'total_price',
        'notes',
    ];
}
