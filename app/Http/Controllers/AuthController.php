<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function post_login(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){
            if(Auth::user()->role == 'user'){
                return redirect('/user/dashboard');
            }elseif(Auth::user()->role == 'admin'){
                return redirect('/admin/dashboard');
            }else{
                return redirect('/login');
            }
        }
        return redirect('/login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function post_register(Request $request)
    {
        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'namaUser' => $request->nama_user,
            'email' => $request->email,
            'noHp' => $request->no_hp,
            'role' => $request->role,
        ]);

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
