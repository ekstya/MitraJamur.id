<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $data = User::where('id', Auth::user()->id)->first();
        if (Auth::user()->role == 'admin') {
            return view('admin.profil', compact('data'));
        } else {
            return view('user.profil', compact('data'));
        }
    }

    public function update(Request $request, $id)
    {
        $data = User::where('id', $id)->update([
            'username' => $request->username,
            'namaUser' => $request->namaUser,
            'noHp' => $request->noHp,
            'email' => $request->email
        ]);

        return back();
    }
}
