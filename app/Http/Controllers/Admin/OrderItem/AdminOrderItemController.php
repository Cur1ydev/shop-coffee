<?php

namespace App\Http\Controllers\Admin\OrderItem;

use App\Http\Controllers\Controller;
use App\Models\Orderitem;
use Illuminate\Http\Request;

class AdminOrderItemController extends Controller
{
    public function List()
    {
        $getAll = Orderitem::with('product','status')->orderByDesc('created_at')->get();
        return view('admin.orderitem.list',compact('getAll'));
    }
    public function  Delete(Request $request){
        Orderitem::find($request->id)->delete();
        return redirect()->route('admin.orderitem.list');
    }
}
