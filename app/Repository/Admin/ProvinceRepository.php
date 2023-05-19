<?php

namespace App\Repository\Admin;

use App\Interface\Admin\ProvinceInterface;
use App\Models\ProvinceOrder;

class ProvinceRepository implements ProvinceInterface
{
    public function List()
    {
        return ProvinceOrder::all();
    }

    public function GetById($id)
    {
        return ProvinceOrder::find($id);
    }

    public function Create(array $data)
    {
        $po = new ProvinceOrder();
        $po->name = $data['name'];
        return $po->save();
    }

    public function Update(array $data, $id)
    {
        return ProvinceOrder::find($id)->update([
            'name' => $data['name']
        ]);
    }

    public function Delete($id)
    {
        return ProvinceOrder::find($id)->delete();
    }

}
