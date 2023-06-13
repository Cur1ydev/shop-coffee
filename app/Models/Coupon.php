<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coupon extends Model
{
    use HasFactory;

    protected $table = 'coupon';
    protected $fillable = [
        'name',
        'price'
    ];

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'coupon_id');
    }
}
