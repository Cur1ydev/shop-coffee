<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Interface\Admin\ProductInterface;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    public function Add(Request $request){
        $category=Category::all();
        return view('admin.product.add',compact('category'));
    }
    public function AddPost(Request $request){
        $rule=[
            'name' =>'required',
            'category_id'=>'required',
            'image'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'status'=>'required',
            'description'=>'required'
        ];
        $mess=[
            'name.required' => 'Tên sản phẩm phải được nhập',
            'category_id.required' => 'Danh mục sản phẩm phải được chọn',
            'image.required'=>'Ảnh sản phẩm phải được nhập',
            'price.required'=>'Giá sản phẩm phải được nhập',
            'discount.required'=>'Giảm giá phải được nhập',
            'status.required'=>'Trạng thái sản phẩm phải được chọn',
            'description'=>'Mô tả sản phẩm phải được nhập'
        ];
        $request->validate($rule,$mess);
        $data=[
            'name' => $request->name,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->name),
            'image' => $request->image,
            'price' => $request->price,
            'discount' => $request->discount,
            'status' => $request->status,
            'description' => $request->description,
        ];
        $this->product->Create($data);
        return redirect()->route('admin.product.list');
    }
    public function Update(Request $request){
        $findProduct=$this->product->GetById($request->id);
        $category=Category::all();
        return view('admin.product.update',compact('findProduct','category'));
    }
    public function UpdatePost(Request $request){
        $rule=[
            'name' =>'required',
            'category_id'=>'required',
            'image'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'status'=>'required',
            'description'=>'required'
        ];
        $mess=[
            'name.required' => 'Tên sản phẩm phải được nhập',
            'category_id.required' => 'Danh mục sản phẩm phải được chọn',
            'image.required'=>'Ảnh sản phẩm phải được nhập',
            'price.required'=>'Giá sản phẩm phải được nhập',
            'discount.required'=>'Giảm giá phải được nhập',
            'status.required'=>'Trạng thái sản phẩm phải được chọn',
            'description'=>'Mô tả sản phẩm phải được nhập'
        ];
        $request->validate($rule,$mess);
        $data=[
            'name' => $request->name,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->name),
            'image' => $request->image,
            'price' => $request->price,
            'discount' => $request->discount,
            'status' => $request->status,
            'description' => $request->description,
        ];
        $this->product->Update($data,$request->id);
        return redirect()->route('admin.product.list');
    }
    public function Delete(Request $request){
        $this->product->Delete($request->id);
        return redirect()->route('admin.product.list');
    }
}
