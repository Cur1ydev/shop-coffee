<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Orderitem;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalPrice =0 ;
        foreach (Orderitem::all() as $value) {
            $totalPrice += $value->total_price;
        }
        $countOrder = count(Orderitem::all());
        $countProduct = count(Product::all());
        $countPay = count(Orderitem::where('status_id',1)->get());
        return view('admin.dashboard.index',compact('totalPrice','countOrder','countProduct','countPay'));
    }
}
