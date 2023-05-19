<?php

namespace App\Repository\Admin;

use App\Interface\Admin\ProductAttributeInterface;
use App\Models\ProductAttribute;
use App\Models\Product;

class ProductAttributeRepository implements ProductAttributeInterface
{
    public function List()
    {
        return Product::with('attribute')->get();
    }

    public function GetById(array $id)
    {
        return ProductAttribute::where('product_id', $id['product_id'])
            ->where('attribute_id', $id['attribute_id'])->first();
    }

    public function Create(array $data)
    {
        $pa = new ProductAttribute();
        $pa->product_id = $data['product_id'];
        $pa->attribute_id = $data['attribute_id'];
        return $pa->save();
    }

    public function Update(array $data, $id)
    {
        return ProductAttribute::find($id)->update([
                'product_id' => $data['product_id'],
                'attribute_id' => $data['attribute_id'],
            ]);
    }

    public function Delete($id)
    {
        return ProductAttribute::find($id)->delete();
    }
}
