<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;
    protected $table='orderitem';
    protected $fillable=[
        'product_id',
        'attribute',
        'quantity',
        'total_price',
        'shipping_fee',
        'order_code',
        'coupon_code',
        'address'
    ];
}
