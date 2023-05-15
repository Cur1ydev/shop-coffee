<?php

namespace App\Interface\Client;

interface ShopInterface
{
    public function GetAllProduct();
    public function GetProductFeatured();
    public function GetAllCategory();
    public function SearchProduct($key);
}
