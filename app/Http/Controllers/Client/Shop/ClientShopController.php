<?php

namespace App\Http\Controllers\Client\Shop;

use App\Http\Controllers\Controller;
use App\Interface\Client\ShopInterface;
use Illuminate\Http\Request;

class ClientShopController extends Controller
{
    protected $shop;
    public function __construct(ShopInterface $shop)
    {
        $this->shop = $shop;
    }

    public function index(Request $request){
        $allProduct = $this->shop->GetAllProduct();
        $topProduct = $this->shop->GetProductFeatured();
        $allCategory = $this->shop->GetAllCategory();
        if (isset($request->search)){
            $allProduct = $this->shop->SearchProduct($request->search);
        }
        return view('client.shop.index',compact('allProduct','topProduct','allCategory'));
    }
}
