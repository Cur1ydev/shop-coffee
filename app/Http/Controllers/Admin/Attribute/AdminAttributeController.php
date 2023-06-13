<?php

namespace App\Http\Controllers\Admin\Attribute;

use App\Http\Controllers\Controller;
use App\Interface\Admin\AttributeInterface;
use App\Models\Notification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminAttributeController extends Controller
{
    protected $attribute;

    public function __construct(AttributeInterface $attribute)
    {
        $this->attribute = $attribute;
    }

    public function List(): View
    {
        $List = $this->attribute->List();
        return view('admin.attribute.list', compact('List'));
    }

    public function Add(): View
    {
        return view('admin.attribute.add');
    }

    public function AddPost(Request $request):RedirectResponse
    {
        $rule =
            [
                'name' => 'required',
                'value' => 'required',
                'price' => 'required'
            ];
        $mess =
            [
                'name.required' => 'Tên Attribute phải được nhập',
                'value.required' => 'Giá trị Attribute phải được nhập',
                'price.required' => 'Giá phả được nhập'
            ];
        $request->validate($rule, $mess);
        $data = [
            'name' => $request->name,
            'value' => $request->value,
            'price' => $request->price
        ];
        $this->attribute->Create($data);
        $nt = new  Notification();
        $nt->message = "Bạn đã Thêm thuộc tính thành công";
        $nt->save();
        return redirect()->route('admin.attribute.list');
    }

    public function Update(Request $request)
    {
        $findAttribute = $this->attribute->GetById($request->id);
        return view('admin.attribute.update', compact('findAttribute'));
    }

    public function UpdatePost(Request $request)
    {
        $rule =
            [
                'name' => 'required',
                'value' => 'required'
            ];
        $mess =
            [
                'name.required' => 'Tên Attribute phải được nhập',
                'value.required' => 'Giá trị Attribute phải được nhập'
            ];
        $request->validate($rule, $mess);
        $data = [
            'name' => $request->name,
            'value' => $request->value,
            'price' => $request->price
        ];
        $this->attribute->Update($data, $request->id);
        $nt = new  Notification();
        $nt->message = "Bạn đã Sửa thuộc tính thành công";
        $nt->save();
        return redirect()->route('admin.attribute.list');
    }

    public function Delete(Request $request)
    {
        $this->attribute->Delete($request->id);
        $nt = new  Notification();
        $nt->message = "Bạn đã Xoá thuộc tính thành công";
        $nt->save();
        return redirect()->route('admin.attribute.list');
    }
}
