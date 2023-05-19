<?php

namespace App\Http\Controllers\Admin\Province;

use App\Http\Controllers\Controller;
use App\Interface\Admin\ProvinceInterface;
use App\Models\AddressOrder;
use App\Models\ProvinceOrder;
use Illuminate\Http\Request;

class AdminProvinceController extends Controller
{
    protected $province;

    public function __construct(ProvinceInterface $province)
    {
        $this->province = $province;
    }

    public function List()
    {
        $List = $this->province->List();
        return view('admin.province.list', compact('List'));
    }

    public function Add()
    {
        return view('admin.province.add');
    }

    public function AddPost(Request $request)
    {
        $rule = [
            'name' => 'required'
        ];
        $mess = [
            'name.required' => 'Tỉnh thành Bắt buộc phải nhập'
        ];
        $request->validate($rule, $mess);
        $data = [
            'name' => $request->name
        ];
        $this->province->Create($data);
        return redirect()->route('admin.province.list');
    }

    public function Update(Request $request)
    {
        $find = $this->province->GetById($request->id);
        return view('admin.province.update', compact('find'));
    }

    public function UpdatePost(Request $request)
    {
        $rule = [
            'name' => 'required'
        ];
        $mess = [
            'name.required' => 'Tỉnh thành Bắt buộc phải nhập'
        ];
        $request->validate($rule, $mess);
        $data = [
            'name' => $request->name
        ];
        $this->province->Update($data, $request->id);
        return redirect()->route('admin.province.list');
    }

    public function Delete(Request $request)
    {
        $findAddress = AddressOrder::where('id_province_order',$request->id)->first();
        if ($findAddress) {
            return back()->with('deleteError', 'Bạn sẽ không thể xoá được tỉnh này nếu chưa xoá hết địa chỉ liên quan');
        }
        $this->province->Delete($request->id);
        return redirect()->route('admin.province.list');
    }
}
