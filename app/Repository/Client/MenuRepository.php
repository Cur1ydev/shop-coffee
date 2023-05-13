<?php

namespace App\Repository\Client;

use App\Interface\Client\MenuInterface;
use App\Models\Category;
use App\Models\Product;

class MenuRepository implements MenuInterface
{
    public function GetAllCategory()
    {
        return Category::all();
    }
    public function GetAllProduct()
    {
        return Product::all();
    }
}
