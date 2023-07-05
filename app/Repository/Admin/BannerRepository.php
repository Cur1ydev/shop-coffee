<?php

namespace App\Repository\Admin;

use App\Interface\Admin\BannerInterface;
use App\Models\Banner;

class BannerRepository implements BannerInterface
{
    public function List()
    {
        return Banner::all();
    }

    public function GetById($id)
    {
        return Banner::find($id);
    }

    public function Create(array $data)
    {
        $bn = new Banner();
        $bn->image = $data['image'];
        return $bn->save();
    }

    public function Update(array $data, $id)
    {
        return Banner::find($id)->update([
            'image' => $data['image']
        ]);
    }

    public function Delete($id)
    {
        return Banner::find($id)->delete();
    }
}
