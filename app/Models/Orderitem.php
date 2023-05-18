<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Termwind\renderUsing;

class Orderitem extends Model
{
    use HasFactory;
    protected $table='orderitem';
    protected $fillable=[
        'order_code',
        'coupon_id',
        'product_id',
        'attribute',
        'price',
        'quantity',
        'total_price',
        'address',
        'username',
        'phone_number'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function coupon(){
        return $this->belongsTo(Coupon::class,'coupon_id');
    }
}
