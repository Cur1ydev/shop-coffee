<?php

namespace App\Repository;

use App\Interface\ProductInterface;
use App\Models\Product;

class ProductRepository implements ProductInterface
{
    public function List()
    {
        return Product::with('category')->get();
    }
    public function GetById($id)
    {
        // TODO: Implement GetById() method.
    }
    public function Create(array $data)
    {
        // TODO: Implement Create() method.
    }
    public function Update(array $data, $id)
    {
        // TODO: Implement Update() method.
    }
    public function Delete($id)
    {
        // TODO: Implement Delete() method.
    }
}
