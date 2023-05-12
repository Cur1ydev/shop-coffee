<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Interface\ProductInterface;
use App\Models\Category;
use App\Models\Product;
use App\Repository\ProductRepository;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    protected $product;

    public function __construct(ProductInterface $product)
    {
        $this->product = $product;
    }

    public function List()
    {
        $List = $this->product->List();
        return view('admin.product.list', compact('List'));
    }
    public function Add(){
        return view('admin.product.add');
    }
//    public function abcd(){
//        $product=Product::with('category')->get();
//        foreach ($product as $key => $value) {
//            dd($value->name);
//        }
//    }
}
