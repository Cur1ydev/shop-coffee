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
