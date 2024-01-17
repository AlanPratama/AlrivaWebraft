<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Cache\RedisStore;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginIndex()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $remember = $request->has('remember_me');

        if (Auth::attempt($credentials, $remember)) {
            if (Auth::user()->role == 'Admin') {
                return redirect()->route('dashboard')->with('success', 'BERHASIL LOGIN');
            } else {
                return redirect('service')->with('success', 'BERHASIL LOGIN');
            }
        } else {
            return redirect()->route('login')->with('error', 'USERNAME ATAU PASSWORD SALAH');
        }
    }


    public function registerIndex()
    {
        return view('auth.register');
    }


    public function registerProcess(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' =>'required',
            'email' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'confirm_password' => 'same:password|required',
        ]);


        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ];

        User::create($data);

        return redirect()->route('register')->with('success', 'BERHASIL MEMBUAT AKUN! SILAHKAN LOGIN');

    }



    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
