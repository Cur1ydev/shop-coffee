<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use function Termwind\renderUsing;

class LoginController extends Controller
{
    use Authenticatable;
    public function index(){
        return view('login');
    }
    public function handleLogin(Request $request){
        $rule=[
            'email' => 'required|email',
            'password' => 'required'
        ];
        $mess=[
            'email.required' => 'Email phải được nhập',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu phải được nhập'
        ];
        $request->validate($rule,$mess);
    }
}
