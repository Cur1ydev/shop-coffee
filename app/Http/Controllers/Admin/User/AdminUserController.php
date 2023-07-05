<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function list()
    {
        $user = User::all();
        $ownUser = empty(Auth::user()) ? "" : Auth::user();
        return view('admin.user.list', compact('user', 'ownUser'));
    }

    public function EditRole(Request $request)
    {
        if ($request->id) {
            $findUser = User::find($request->id);
            if ($findUser->role == 1) {
                $findUser->role = 0;
                $findUser->save();
            } elseif ($findUser->role == 0) {
                $findUser->role = 1;
                $findUser->save();
            }
            return redirect()->route('admin.user.list');
        }
    }
}
