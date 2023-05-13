<?php

namespace App\Repository;

use App\Interface\AttributeInterface;
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
        return $attribute->save();
    }

    public function Update(array $data, $id)
    {
        return Attribute::find($id)->update([
            'name' => $data['name'],
            'value' => $data['value']
        ]);
    }

    public function Delete($id)
    {
        return Attribute::find($id)->delete();
    }
}
