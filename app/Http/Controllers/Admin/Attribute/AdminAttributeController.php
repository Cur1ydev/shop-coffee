<?php

namespace App\Http\Controllers\Admin\Attribute;

use App\Http\Controllers\Controller;
use App\Interface\Admin\AttributeInterface;
use Illuminate\Http\Request;

class AdminAttributeController extends Controller
{
    protected $attribute;

    public function __construct(AttributeInterface $attribute)
    {
        $this->attribute = $attribute;
    }

    public function List()
    {
        $List = $this->attribute->List();
        return view('admin.attribute.list', compact('List'));
    }

    public function Add()
    {
        return view('admin.attribute.add');
    }

    public function AddPost(Request $request)
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
            'value' => $request->value
        ];
        $this->attribute->Create($data);
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
            'value' => $request->value
        ];
        $this->attribute->Update($data,$request->id);
        return redirect()->route('admin.attribute.list');
    }

    public function Delete(Request $request)
    {
        $this->attribute->Delete($request->id);
        return redirect()->route('admin.attribute.list');
    }
}
