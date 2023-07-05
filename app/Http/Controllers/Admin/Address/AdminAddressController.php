<?php

namespace App\Http\Controllers\Admin\Address;

use App\Http\Controllers\Controller;
use App\Interface\Admin\AddressInterface;
use App\Models\Notification;
use App\Models\ProvinceOrder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminAddressController extends Controller
{
    protected $address;

    public function __construct(AddressInterface $address)
    {
        $this->address = $address;
    }

    public function List(): View
    {
        $List = $this->address->List();
        return view('admin.address.list', compact('List'));
    }

    public function Add(): View
    {
        $province = ProvinceOrder::all();
        return view('admin.address.add', compact('province'));
    }

    public function AddPost(Request $request): RedirectResponse
    {
        $rule = [
            'address' => 'required'
        ];
        $mess = [
            'address.required' => 'Địa chỉ bắt buộc phải nhập'
        ];
        $request->validate($rule, $mess);
        $data = [
            'id_province_order' => $request->id_province_order,
            'address' => $request->address
        ];
        $this->address->Create($data);
        $nt = new  Notification();
        $nt->message = "Bạn đã Thêm địa chỉ thành công";
        $nt->save();
        return redirect()->route('admin.address.list');
    }

    public function Update(Request $request): View
    {
        $province = ProvinceOrder::all();
        $find = $this->address->GetById($request->id);
        return view('admin.address.update', compact('find', 'province'));
    }

    public function UpdatePost(Request $request): RedirectResponse
    {
        $rule = [
            'address' => 'required'
        ];
        $mess = [
            'address.required' => 'Địa chỉ bắt buộc phải nhập'
        ];
        $request->validate($rule, $mess);
        $data = [
            'id_province_order' => $request->id_province_order,
            'address' => $request->address
        ];
        $this->address->Update($data, $request->id);
        $nt = new  Notification();
        $nt->message = "Bạn đã Sửa địa chỉ thành công";
        $nt->save();
        return redirect()->route('admin.address.list');
    }

    public function Delete(Request $request)
    {
        $this->address->Delete($request->id);
        $nt = new  Notification();
        $nt->message = "Bạn đã Xoá địa chỉ thành công";
        $nt->save();
        return redirect()->route('admin.address.list');
    }
}
