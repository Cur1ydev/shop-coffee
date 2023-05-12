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
        return Product::find($id);
    }

    public function Create(array $data)
    {
        $product = new Product();
        $product->name = $data['name'];
        $product->category_id = $data['category_id'];
        $product->slug = $data['slug'];
        $product->image = $data['image'];
        $product->price = $data['price'];
        $product->discount = $data['discount'];
        $product->status = $data['status'];
        $product->description = $data['description'];
        return $product->save();
    }

    public function Update(array $data, $id)
    {
        return Product::find($id)->update([
            'name' => $data['name'],
            'category_id' => $data['category_id'],
            'slug' => $data['slug'],
            'image' => $data['image'],
            'price' => $data['price'],
            'discount' => $data['discount'],
            'status' => $data['status'],
            'description' => $data['description']
        ]);
    }

    public function Delete($id)
    {
        return Product::find($id)->delete();
    }
}
