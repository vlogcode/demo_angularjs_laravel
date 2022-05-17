<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Session;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min :5|max:12'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('user.index');

        } else {
            return back()->with('fail', 'email hoặc password ko dung');
        }
    }


//    public function dashboard()
//    {
//        return redirect()->route('user.index');
//    }
}
