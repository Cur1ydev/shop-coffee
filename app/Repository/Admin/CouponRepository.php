<?php

namespace App\Repository\Admin;

use App\Interface\Admin\CouponInterface;
use App\Models\Coupon;

class CouponRepository implements CouponInterface
{
    public function List()
    {
        return Coupon::all();
    }

    public function GetById($id)
    {
        return Coupon::find($id);
    }

    public function Create(array $data)
    {
        $cp = new Coupon();
        $cp->name = $data['name'];
        $cp->price = $data['price'];
        return $cp->save();
    }

    public function Update(array $data, $id)
    {
        return Coupon::find($id)->update([
            'name' => $data['name'],
            'price' => $data['price']
        ]);
    }

    public function Delete($id)
    {
        return Coupon::find($id)->delete();
    }
}
