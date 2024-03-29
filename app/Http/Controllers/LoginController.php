<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use function Termwind\renderUsing;
use function Webmozart\Assert\Tests\StaticAnalysis\false;

class LoginController extends Controller
{
    use Authenticatable;

    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $rule = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $mess = [
            'email.required' => 'Email phải được nhập',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu phải được nhập'
        ];
        $request->validate($rule, $mess);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
//        dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role == 1) {
                return redirect()->route('client.home');
            } else {
                return redirect()->route('admin.dashboard');
            }
        } else {
            return back()->with('loginErrors', 'Thông tin đăng nhập không chính xác');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function googleLogin(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request)
    {
        $user = Socialite::driver('google')->user();
        if($user){
            $existUser = User::where('email', $user->getEmail())->first();
            if ($existUser) {
                auth()->login($existUser, true);
            } else {
                $newUser = new User();
                $newUser->name = $user->getName();
                $newUser->email = $user->getEmail();
                $newUser->email_verified_at = now();
                $newUser->role = 1;
                $newUser->google_id = $user->getId();
                $newUser->save();
                auth()->login($newUser, true);
            }
            return redirect()->route('client.home');
        }
    }
}
