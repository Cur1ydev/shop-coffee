<?php

namespace App\Repository\Admin;

use App\Interface\Admin\AttributeInterface;
use App\Models\Attribute;

class AttributeRepository implements AttributeInterface
{
    public function List()
    {
        return Attribute::all();
    }

    public function GetById($id)
    {
        return Attribute::find($id);
    }

    public function Create(array $data)
    {
        $attribute = new Attribute();
        $attribute->name = $data['name'];
        $attribute->value = $data['value'];
        $attribute->price = $data['price'];
        return $attribute->save();
    }

    public function Update(array $data, $id)
    {
        return Attribute::find($id)->update([
            'name' => $data['name'],
            'value' => $data['value'],
            'price' => $data['price']
        ]);
    }

    public function Delete($id)
    {
        return Attribute::find($id)->delete();
    }
}
