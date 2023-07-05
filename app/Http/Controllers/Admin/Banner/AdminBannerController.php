<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Interface\Admin\BannerInterface;
use App\Models\Notification;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    protected $banner;

    public function __construct(BannerInterface $banner)
    {
        $this->banner = $banner;
    }

    public function List()
    {
        $List = $this->banner->List();
        return view('admin.banner.list', compact('List'));
    }

    public function Add()
    {
        return view('admin.banner.add');
    }

    public function AddPost(Request $request)
    {
        $rule =
            [
                'image' => 'required'
            ];
        $mess =
            [
                'image.required' => 'Ảnh phải được chọn'
            ];

        $request->validate($rule, $mess);
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $upload = $file->storeAs('images', $fileName, 'public');
            $fullpath = "storage/$upload";
            $data = [
                'image' => $fullpath
            ];
            $this->banner->Create($data);
            $nt = new  Notification();
            $nt->message = "Bạn đã Thêm danh mục thành công";
            $nt->save();
            return redirect()->route('admin.banner.list');
        }


    }

    public function Update(Request $request)
    {
        $findcategory = $this->banner->GetById($request->id);
        return view('admin.banner.update', compact('findcategory'));
    }

    public function UpdatePost(Request $request)
    {
        $rule =
            [
                'image' => 'required'
            ];
        $mess =
            [
                'image.required' => 'Ảnh phải được chọn'
            ];

        $request->validate($rule, $mess);
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $upload = $file->storeAs('images', $fileName, 'public');
            $fullpath = "storage/$upload";
            $data = [
                'image' => $fullpath
            ];
            $this->banner->Update($data,$request->id);
            $nt = new  Notification();
            $nt->message = "Bạn đã Sửa danh mục thành công";
            $nt->save();
            return redirect()->route('admin.banner.list');
        }

    }

    public function Delete(Request $request)
    {
        $this->banner->Delete($request->id);
        $nt = new  Notification();
        $nt->message = "Bạn đã Xoá danh mục thành công";
        $nt->save();
        return redirect()->route('admin.banner.list');
    }
}
