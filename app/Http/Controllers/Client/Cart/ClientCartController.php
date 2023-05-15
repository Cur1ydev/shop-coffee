<?php

namespace App\Http\Controllers\Client\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientCartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');
        return view('client.cart.index', compact('cart'));
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
            'quantity' => $quantity
        ];
        if (session()->has('cart')) {
            $cart = session()->get('cart');
        } else {
            $cart = session()->get('cart', []);
        }
        $found = false;
        foreach ($cart as &$value) {
            if (count($value['attribute']['topping'])>0){
                if ($value['id'] == $data['id'] && $value['name_product'] == $data['name_product'] && $value['image'] == $data['image'] && $value['attribute']['size'] == $data['attribute']['size'] && $value['attribute']['topping'] == $data['attribute']['topping']) {
                    $value['quantity'] += $data['quantity'];
                    $found = true;
                    break;
                }
            }else{
                if ($value['id'] == $data['id'] && $value['name_product'] == $data['name_product'] && $value['image'] == $data['image'] && $value['attribute']['size'] == $data['attribute']['size']) {
                    $value['quantity'] += $data['quantity'];
                    $found = true;
                    break;
                }
            }
        }
        unset($value);
        if (!$found) {
            $cart[] = $data;
        }
        session()->put('cart', $cart);
        return response()->json(['success' => "Thêm sản phẩm vào giỏ hàng thành công"]);
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
        session()->put('cart',$cart);
        return back()->with('deleteItem','Xóa sản phẩm thành công');
    }
}
