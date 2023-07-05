<?php

namespace App\Repository\Client;

use App\Interface\Client\HomeInterface;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;

class HomeRepository implements HomeInterface
{
    public function ListProduct()
    {
        return Product::where('status',1)->get();
    }
    public function ListCategory()
    {
        return Category::all();
    }
    public function ListBanner()
    {
        return Banner::all();
    }
}
