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
//        Mail::to("$request->email")->send(new WelcomeMail($us));
        $us->save();
        return back()->with('success','Đăng ký tài khoản thành công');
    }
}
