<?php

namespace App\Repository\Client;

use App\Interface\Client\ProductDetailInterface;
use App\Models\Attribute;
use App\Models\Product;

class ProductDetailRepository implements ProductDetailInterface
{
    public function GetAllProductAttribute($slug)
    {
        return Product::where('slug',$slug)->with('attribute')->first();
    }
}
