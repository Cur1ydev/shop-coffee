<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Attribute extends Model
{
    use HasFactory;

    protected $table = 'attributes';
    protected $fillable = [
        'name',
        'value'
    ];

    public function product(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_attribute');
    }
}
