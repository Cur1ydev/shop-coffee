<?php

namespace App\Http\Controllers\Admin\ProductAttribute;

use App\Http\Controllers\Controller;
use App\Interface\Admin\ProductAttributeInterface;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductAttributeController extends Controller
{
    protected $productAttribute;

    public function __construct(ProductAttributeInterface $productAttribute)
    {
        $this->productAttribute = $productAttribute;
    }

    public function List()
    {
        $getAll = Product::with('attribute')->get();
        return view('admin.productattribute.list', compact('getAll'));
    }

    public function Add()
    {
        $product = Product::all();
        $attribute = Attribute::all();
        return view('admin.productattribute.add', compact('product', 'attribute'));
    }

    public function AddPost(Request $request)
    {
        $data =[
            'product_id' => $request->product_id,
            'attribute_id' => $request->attribute_id
        ];
        foreach (ProductAttribute::all() as $value){
            if ($value->product_id == $data['product_id'] && $value->attribute_id== $data['attribute_id']){
                return back()->with('adderrror','Thuộc tính này đã được thêm vui lòng chọn thuộc tính khác');
            }
        }
        $this->productAttribute->Create($data);
        return redirect()->route('admin.productattribute.list');
    }

    public function Update(Request $request)
    {
        $productId = $request->product_id;
        $attributeId = $request->attribute_id;
        $id=[
            'product_id'=> $productId,
            'attribute_id' => $attributeId
        ];
        session()->put('id',$id);
        session()->save();
        $productAtt = Product::where('id', $productId)
            ->with(['attribute' => function ($query) use ($attributeId) {
                $query->where('attributes.id', $attributeId);
            }])
            ->first();
        $product = Product::all();
        $attribute = Attribute::all();
        return view('admin.productattribute.update',compact('attribute','product','productAtt'));
    }



    public function UpdatePost(Request $request)
    {
        $getid= $this->productAttribute->GetById(session()->get('id'))->id;
        $data = [
            'product_id' => $request->product_id,
            'attribute_id' => $request->attribute_id
        ];
        foreach (ProductAttribute::all() as $value){
            if ($value->product_id == $data['product_id'] && $value->attribute_id== $data['attribute_id']){
                return back()->with('adderrror','Thuộc tính này đã được thêm vui lòng chọn thuộc tính khác');
            }
        }
        $this->productAttribute->Update($data,$getid);
        session()->forget('id');
        session()->save();
        return redirect()->route('admin.productattribute.list');
    }

    public function Delete(Request $request)
    {
        $productId = $request->product_id;
        $attributeId = $request->attribute_id;
        $id=[
            'product_id'=> $productId,
            'attribute_id' => $attributeId
        ];
        $getid= $this->productAttribute->GetById($id)->id;
        $this->productAttribute->Delete($getid);
        return redirect()->route('admin.productattribute.list');
    }
}
