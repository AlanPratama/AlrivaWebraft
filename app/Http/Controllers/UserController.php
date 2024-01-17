<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function akun()
    {
        return view('pages.user.akun');
    }

    public function akunEdit(Request $request, $slug)
    {
        $validate = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'username' => 'required|unique:users,username,' . Auth::user()->id,
            'password' => '',
            'confirm_password' => 'same:password',
        ]);

        $user = User::where('id', Auth::user()->id)->first();

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->username = $request->username;

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->slug = null;
        $user->save();

        return redirect('/akun')->with('success', 'AKUN BERHASIL DIPERBARUI');


    }

}
