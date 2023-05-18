<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;
use App\Models\AddressOrder;
use App\Models\Coupon;
use App\Models\ProvinceOrder;
use Illuminate\Http\Request;

class ClientCartController extends Controller
{
    public function index(Request $request)
    {
        $cart = session()->get('cart');
        $province = ProvinceOrder::with('addressOrder')->get();
        $discount = 0;
        if (isset($request->coupon_code)) {
            $discount = Coupon::where('name', $request->coupon_code)->first();
            session()->put('coupon_id',$discount->id);
        }
        return view('client.cart.index', compact('cart', 'province', 'discount'));
    }

    public function handleAddtocart(Request $request)
    {
        $id = $request->id;
        $name_product = $request->name_product;
        $image = $request->image;
        $attribute = $request->attribute;
        $price = $request->price;
        $quantity = $request->quantity;
        $data = [
            'id' => $id,
            'name_product' => $name_product,
            'image' => $image,
            'attribute' => $attribute,
            'price' => $price,
            'quantity' => $quantity,
            'total_price' => $price*$quantity
        ];
        if (session()->has('cart')) {
            $cart = session()->get('cart');
        } else {
            $cart = session()->get('cart', []);
        }
        $found = false;
        foreach ($cart as &$value) {
            if ($cart == $data) {
                $value['quantity'] += $data['quantity'];
                $found = true;
                break;
            }
        }
        unset($value);
        if (!$found) {
            $cart[] = $data;
        }
        session()->put('cart', $cart);
        return response()->json(['success' => "Thêm sản phẩm vào giỏ hàng thành công", 'data' => $cart]);
    }

    public function DeleteAllSession()
    {
        session()->forget('cart');
        return back()->with('deleteSuccess', 'Xóa Giỏ hàng thành công');
    }

    public function deleteItemCart(Request $request)
    {
        $cart = session()->get('cart');
        unset($cart[$request->id]);
        session()->put('cart', $cart);
        return back()->with('deleteItem', 'Xóa sản phẩm thành công');
    }

    public function selectAddress(Request $request)
    {
        $data = AddressOrder::where('id_province_order', $request->idProvince)->get();
        return response()->json(['data' => $data]);
    }

    public function increaseQuantity(Request $request)
    {
        $quantity = $request->quantity;
        $keyProduct = $request->keyProduct;
        $cart = session()->get('cart');
        foreach ($cart as $key => &$value) {
            if ($key == $keyProduct) {
                $value['quantity'] = $quantity;
            }
        }
        unset($value);
        session()->put('cart', $cart);
        return response()->json('thành công');
    }
}
