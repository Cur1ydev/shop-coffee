<?php

namespace App\Http\Controllers\Client\Checkout;

use App\Http\Controllers\Controller;
use App\Models\Orderitem;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function handleApiVnpay(Request $request)
    {
        $rule = [
            'name' => 'required',
            'phone_number' => 'required|numeric'
        ];
        $mess = [
            'name.required' => 'Tên phải được nhập',
            'phone_number.required' => 'Số điện thoại phải được nhập',
            'phone_number.numeric' => 'Số điện thoại nhập vào phải là số'
        ];
        $request->validate($rule, $mess);
        session()->put([
            'username' => $request->name,
            'phone_number' => $request->phone_number,
            'note' => $request->note
        ]);

        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
//        date_default_timezone_set('Asia/Ho_Chi_Minh');
        /**
         * Description of vnpay_ajax
         *
         * @author xonv
         */
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */

        $vnp_TmnCode = "DL0EA7AJ"; //Website ID in VNPAY System
        $vnp_HashSecret = "GOGAQDDKQGSHOENQIKCHZBMXCIZBQVXJ"; //Secret key
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('client.handlePayment') . "?msg=success";
//        $vnp_apiUrl = " https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
//Config input format
//Expire
        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

        $vnp_TxnRef = time(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh-toan-don-hang"; //mô tả đơn hàng
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $_POST['total_price'] * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
//Add Params of 2.0.1 Version
        $vnp_ExpireDate = $expire;

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $vnp_ExpireDate,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

//var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
        , 'message' => 'success'
        , 'data' => $vnp_Url);
//        dd($vnp_Url);
        if ($request->total_price) {
//            dd(123);
            return redirect($vnp_Url);
//            return redirect()->getTargetUrl($vnp_Url);
        } else {
            echo json_encode($returnData);
        }
    }

    public function handleVNpayReturn(Request $request)
    {
        if ($request->msg == 'success' && !empty(session()->get('cart')) && !empty(session()->get('address')) && !empty(session()->get('allPrice')) && !empty(session()->get('username')) && !empty(session()->get('phone_number'))) {
            $cart = session()->get('cart');
            foreach ($cart as $key => $value) {
                $orderItem = new Orderitem();
                $orderItem->order_code = "LX-" . rand(0, 100000);
                $orderItem->coupon = !empty(session()->get('coupon')) ? session()->get('coupon') : '';
                $orderItem->product_id = $value['id'];
                $orderItem->status_id = 1;
                $orderItem->attribute = json_encode($value['attribute'], JSON_UNESCAPED_UNICODE);
                $orderItem->price = $value['price'];
                $orderItem->quantity = $value['quantity'];
                $orderItem->total_price = session()->get('allPrice');
                $orderItem->address = session()->get('address');
                $orderItem->username = session()->get('username');
                $orderItem->phone_number = session()->get('phone_number');
                $orderItem->note = !empty(session()->get('note')) ? session()->get('note') : '';
                $orderItem->save();
            }
            session()->forget(['cart','allPrice','username']);
            if (!empty(session()->get('coupon_id'))) {
                session()->forget('coupon_id');
            }
            if (!empty(session()->get('note'))) {
                session()->forget('note');
            }
            session()->save();
        }

        $order = Orderitem::where('phone_number', session()->get('phone_number'))
            ->where('created_at','>=', Carbon::now()->subDay())
            ->with('product')
            ->with('status')
            ->get();
//        dd($order);
        return view('client.ordersuccess.index',compact('order'));
    }

}
