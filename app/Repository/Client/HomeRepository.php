<?php

namespace App\Repository\Client;

use App\Interface\Client\HomeInterface;
use App\Models\Category;
use App\Models\Product;

class HomeRepository implements HomeInterface
{
    public function ListProduct()
    {
        return Product::all();
    }
    public function ListCategory()
    {
        return Category::all();
    }
}
