<?php

namespace App\Http\Controllers\Client\ProductDetail;

use App\Http\Controllers\Controller;
use App\Interface\Client\ProductDetailInterface;
use Illuminate\Http\Request;

class ClientProductDetailController extends Controller
{
    protected $productDetail;

    public function __construct(ProductDetailInterface $productDetail)
    {
        $this->productDetail = $productDetail;
    }

    public function ProductDetail(Request $request)
    {
        $getAll = $this->productDetail->GetAllProductAttribute($request->slug);
        return view('client.productdetail.index', compact('getAll'));
    }
}
