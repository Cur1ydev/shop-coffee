<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'price',
        'discount',
        'status',
        'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function attribute()
    {
        return $this->belongsToMany(Attribute::class, 'product_attribute');
    }

    public function orderitem()
    {
        return $this->hasMany(Orderitem::class, 'product_id');
    }
}
