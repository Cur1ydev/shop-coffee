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
        'coupon',
        'product_id',
        'status_id',
        'attribute',
        'price',
        'quantity',
        'total_price',
        'address',
        'username',
        'phone_number',
        'note'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function status(){
        return $this->belongsTo(Status::class,'status_id');
    }
}
