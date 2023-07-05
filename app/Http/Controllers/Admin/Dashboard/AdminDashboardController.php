<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Orderitem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalExistingPrice = DB::table('orderitem')->whereNull('deleted_at')->sum('total_price');
        $totalNullPrice = DB::table('orderitem')->whereNotNull('deleted_at')->sum('total_price');
        $totalPrice=$totalExistingPrice + $totalNullPrice;
        $countOrder = count(Orderitem::all());
        $countProduct = count(Product::all());
        $countPay = count(Orderitem::where('status_id', 1)->get());
        return view('admin.dashboard.index', compact('totalPrice', 'countOrder', 'countProduct', 'countPay'));
    }
}
