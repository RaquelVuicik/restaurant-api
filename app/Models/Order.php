<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'table_number',
        'status',
        'subtotal',
        'tax_rate',
        'discount',
        'total',
    ];
}
