<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function attribute(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class, 'product_attribute');
    }

    public function orderitem(): HasMany
    {
        return $this->hasMany(Orderitem::class, 'product_id');
    }
}
