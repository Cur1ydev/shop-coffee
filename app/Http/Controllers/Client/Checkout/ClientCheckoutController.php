<?php

namespace App\Http\Controllers\Client\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientCheckoutController extends Controller
{
    public function index()
    {
        $price = session()->get('allPrice');
        $address = session()->get('address');
        if ($address == null) {
            return back()->with('errorAddress', "Địa chỉ phải được chọn");
        } elseif ($price == 0) {
            return back()->with('errorPrice', "Đã có lỗi xảy ra với giá của bạn");
        }
        return view('client.checkout.index');
    }
}
