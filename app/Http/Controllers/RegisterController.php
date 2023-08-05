<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function handleRegister(Request $request)
    {
        $rule = [
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ];
        $mess = [
            'username.required' => 'Tên phải được nhập',
            'email.required' => 'Email phải được nhập',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu phải được nhập'
        ];
        $request->validate($rule, $mess);
        $us = new User();
        $us->name = $request->username;
        $us->email = $request->email;
        $us->password = password_hash($request->password,PASSWORD_DEFAULT);
        $us->google_id = 0;
//        dd($us);
        $mail=[
            'title' => "Xin chào $request->username",
            'body' => "Cảm ơn bạn đã đăng ký tài khoản trên website của Lợi Xoăn Coffee,vui lòng bạn đăng nhập với tài khoản mà bạn đã đăng
    ký trên website."
        ];
        Mail::to("loixoan28.07@gmail.com")->send(new WelcomeMail($mail));
        $us->save();
        return back()->with('success','Đăng ký tài khoản thành công');
    }
}
