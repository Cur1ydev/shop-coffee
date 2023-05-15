<?php

namespace App\Repository\Client;

use App\Interface\Client\ShopInterface;
use App\Models\Category;
use App\Models\Product;

class ShopRepository implements ShopInterface
{
    public function GetAllProduct()
    {
        return Product::paginate(12);
    }
    public function GetProductFeatured()
    {
        return Product::where('feature_product',1)->paginate(4);
    }
    public function GetAllCategory()
    {
        return Category::with('product')->get();
    }
    public function SearchProduct($key)
    {
        return Product::where('name','like',"%".$key."%")->paginate(12);
    }
}
