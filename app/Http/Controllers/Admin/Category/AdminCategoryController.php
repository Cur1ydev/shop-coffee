<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Interface\Admin\CategoryInterface;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryInterface $category)
    {
        $this->category = $category;
    }

    public function List()
    {
        $List = $this->category->List();
        return view('admin.category.list', compact('List'));
    }

    public function Add()
    {
        return view('admin.category.add');
    }

    public function AddPost(Request $request)
    {
        $rule =
            [
                'name' => 'required',
                'status' => 'required',
                'description' => 'required'
            ];
        $mess =
            [
                'name.required' => 'Tên category phải được nhập',
                'status.required' => 'Trạng thái phải được chọn',
                'description.required' => 'Mô tả phải được nhập'
            ];
        $request->validate($rule, $mess);
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status,
            'description' => $request->description
        ];
        $this->category->Create($data);
        $nt = new  Notification();
        $nt->message = "Bạn đã Thêm danh mục thành công";
        $nt->save();
        return redirect()->route('admin.category.list');
    }

    public function Update(Request $request)
    {
        $findcategory = $this->category->GetById($request->id);
        return view('admin.category.update', compact('findcategory'));
    }

    public function UpdatePost(Request $request)
    {
        $rule =
            [
                'name' => 'required',
                'status' => 'required',
                'description' => 'required'
            ];
        $mess =
            [
                'name.required' => 'Tên category phải được nhập',
                'status.required' => 'Trạng thái phải được chọn',
                'description.required' => 'Mô tả phải được nhập'
            ];
        $request->validate($rule, $mess);
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status,
            'description' => $request->description
        ];
        $this->category->Update($data,$request->id);
        $nt = new  Notification();
        $nt->message = "Bạn đã Sửa danh mục thành công";
        $nt->save();
        return redirect()->route('admin.category.list');
    }

    public function Delete(Request $request)
    {
        $this->category->Delete($request->id);
        $nt = new  Notification();
        $nt->message = "Bạn đã Xoá danh mục thành công";
        $nt->save();
        return redirect()->route('admin.category.list');
    }
}
