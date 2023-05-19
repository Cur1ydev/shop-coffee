<?php

namespace App\Http\Controllers\Admin\Address;

use App\Http\Controllers\Controller;
use App\Interface\Admin\AddressInterface;
use App\Models\ProvinceOrder;
use Illuminate\Http\Request;

class AdminAddressController extends Controller
{
    protected $address;

    public function __construct(AddressInterface $address)
    {
        $this->address = $address;
    }

    public function List()
    {
        $List = $this->address->List();
        return view('admin.address.list',compact('List'));
    }

    public function Add()
    {
        $province = ProvinceOrder::all();
        return view('admin.address.add',compact('province'));
    }

    public function AddPost(Request $request)
    {
        $rule = [
            'address' => 'required'
        ];
        $mess = [
            'address.required' => 'Địa chỉ bắt buộc phải nhập'
        ];
        $request->validate($rule,$mess);
        $data=[
            'id_province_order' => $request->id_province_order,
            'address' => $request->address
        ];
        $this->address->Create($data);
        return redirect()->route('admin.address.list');
    }

    public function Update(Request $request)
    {
        $province = ProvinceOrder::all();
        $find= $this->address->GetById($request->id);
        return view('admin.address.update',compact('find','province'));
    }

    public function UpdatePost(Request $request)
    {
        $rule = [
            'address' => 'required'
        ];
        $mess = [
            'address.required' => 'Địa chỉ bắt buộc phải nhập'
        ];
        $request->validate($rule,$mess);
        $data=[
            'id_province_order' => $request->id_province_order,
            'address' => $request->address
        ];
        $this->address->Update($data,$request->id);
        return redirect()->route('admin.address.list');
    }

    public function Delete(Request $request)
    {
        $this->address->Delete($request->id);
        return redirect()->route('admin.address.list');
    }
}
