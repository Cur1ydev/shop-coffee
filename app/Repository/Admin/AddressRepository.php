<?php

namespace App\Repository\Admin;

use App\Interface\Admin\AddressInterface;
use App\Models\AddressOrder;

class AddressRepository implements AddressInterface
{
    public function List()
    {
        return AddressOrder::with('provinceOrder')->get();
    }

    public function GetById($id)
    {
        return AddressOrder::where('id',$id)->with('provinceOrder')->first();
    }

    public function Create(array $data)
    {
        $ao = new AddressOrder();
        $ao->id_province_order = $data['id_province_order'];
        $ao->address = $data['address'];
        return $ao->save();
    }

    public function Update(array $data, $id)
    {
        return AddressOrder::find($id)->update([
            'id_province_order' => $data['id_province_order'],
            'address' => $data['address']
        ]);
    }

    public function Delete($id)
    {
        return AddressOrder::find($id)->delete();
    }
}
