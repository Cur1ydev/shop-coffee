<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Http\Controllers\Controller;
use App\Interface\Admin\CouponInterface;
use App\Models\Notification;
use Illuminate\Http\Request;

class AdminCouponController extends Controller
{
    protected $coupon;

    public function __construct(CouponInterface $coupon)
    {
        $this->coupon = $coupon;
    }

    public function List()
    {
        $List= $this->coupon->List();
        return view('admin.coupon.list',compact('List'));
    }

    public function Add()
    {
        return view('admin.coupon.add');
    }

    public function AddPost(Request $request)
    {
        $rule = [
            'name' => 'required',
            'price' => 'required'
        ];
        $mess=[
            'name.required' => 'Tên Mã bắt buộc phải nhập',
            'price.required' => 'Giá bắt buộc phải nhập'
        ];
        $request->validate($rule,$mess);
        $data = [
            'name' => $request->name,
            'price' => $request->price
        ];
        $this->coupon->Create($data);
        $nt = new  Notification();
        $nt->message = "Bạn đã Thêm mã giảm giá thành công";
        $nt->save();
        return redirect()->route('admin.coupon.list');

    }

    public function Update(Request $request)
    {
        $find= $this->coupon->GetById($request->id);
        return view('admin.coupon.update',compact('find'));
    }

    public function UpdatePost(Request $request)
    {
        $rule = [
            'name' => 'required',
            'price' => 'required'
        ];
        $mess=[
            'name.required' => 'Tên Mã bắt buộc phải nhập',
            'price.required' => 'Giá bắt buộc phải nhập'
        ];
        $request->validate($rule,$mess);
        $data = [
            'name' => $request->name,
            'price' => $request->price
        ];
        $this->coupon->Update($data,$request->id);
        $nt = new  Notification();
        $nt->message = "Bạn đã Sửa mã giảm giá thành công";
        $nt->save();
        return redirect()->route('admin.coupon.list');
    }

    public function Delete(Request $request)
    {
        $this->coupon->Delete($request->id);
        $nt = new  Notification();
        $nt->message = "Bạn đã Xoá mã giảm giá thành công";
        $nt->save();
        return redirect()->route('admin.coupon.list');
    }
}
