<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MasterController extends Controller
{
    public function Landing() {
        $Produk = DB::table('produk')->get();
        $Workshop = DB::table('workshop')->get();
        return view('landing', compact('Produk', 'Workshop'));
    }
    public function Register() {
        return view('register');
    }
    public function AuthRegister(Request $req) {
        $Data = DB::table('user')->where('username', $req->username);
        Session::flash('vName', $req->name);
        Session::flash('vEmail', $req->email);
        Session::flash('vPhone', $req->phone);
        Session::flash('vUsername', $req->username);
        Session::flash('vPassword1', $req->password1);
        Session::flash('vPassword2', $req->password2);
        if ($Data->count() == 0) {
            if ($req->password1 == $req->password2) {
                Session::forget('vName');
                Session::forget('vEmail');
                Session::forget('vPhone');
                Session::forget('vUsername');
                Session::forget('vPassword1');
                Session::forget('vPassword2');
                DB::table('user')->insert([
                    'username' => $req->username,
                    'password' => $req->password1,
                    'nama_user' => $req->name,
                    'no_hp' => $req->phone,
                    'email' => $req->email,
                    'role' => $req->role,
                    'id_desa' => ''
                ]);
                Session::flash('alertSuccess', 'Registrasi Berhasil');
            } else {
                Session::flash('alertFailed', 'Password Tidak Sama');
            }
        } else {
            Session::flash('alertFailed', 'Username Sudah Terdaftar');
        }
        return back();
    }
    public function Login() {
        return view('login');
    }
    public function AuthLogin(Request $req) {
        $Data = DB::table('user')->where('username', $req->username);
        Session::flash('vUsername', $req->username);
        Session::flash('vPassword', $req->password);
        if ($Data->count() == 1) {
            $Data = $Data->first();
            if ($Data->password == $req->password) {
                Session::forget('vUsername');
                Session::forget('vPassword');
                Session::put('Login', TRUE);
                Session::put('Username', $Data->username);
                Session::put('Password', $Data->password);
                Session::put('Nama', $Data->nama_user);
                Session::put('Role', $Data->role);
                if ($Data->role == 'Admin') {
                    return redirect()->route('Admin');
                } else {
                    return redirect()->route('Customer');
                }
            } else {
                Session::flash('alertFailed', 'Password Salah');
                return back();
            }
        } else {
            Session::flash('alertFailed', 'Username Tidak Terdaftar');
            return back();
        }
    }
    public function Logout() {
        Session::forget('Login');
        Session::forget('Username');
        Session::forget('Password');
        Session::forget('Nama');
        Session::forget('Role');
        Session::forget('Login');
        return redirect()->route('Login');
    }
    public function Admin() {
        return view('admin/dashboard');
    }
    public function Product() {
        $Produk = DB::table('produk')->get();
        return view('admin/product', compact('Produk'));
    }
    public function TambahProduk(Request $req) {
        $NamaFile = time().'.'.$req->file->getClientOriginalExtension();
        $req->file->move('../public/img/produk', $NamaFile);
        DB::table('produk')->insert([
            'gambar_produk' => $NamaFile,
            'nama_produk' => $req->nama,
            'harga_produk' => $req->harga,
            'deskripsi_produk' => $req->deskripsi
        ]);
        return back();
    }
    public function EditProduk(Request $req) {
        DB::table('produk')->where('id_produk', $req->id)->update([
            'nama_produk' => $req->nama,
            'harga_produk' => $req->harga,
            'deskripsi_produk' => $req->deskripsi
        ]);
        return back();
    }
    public function HapusProduk(Request $req) {
        $Data = DB::table('produk')->where('id_produk', $req->id)->first();
        unlink('img/produk/'.$Data->gambar_produk);
        DB::table('produk')->where('id_produk', $req->id)->delete();
        return back();
    }
    public function Workshop() {
        $Workshop = DB::table('workshop')->get();
        return view('admin/workshop', compact('Workshop'));
    }
    public function TambahWorkshop(Request $req) {
        $NamaFile = time().'.'.$req->file->getClientOriginalExtension();
        $req->file->move('../public/img/workshop', $NamaFile);
        $Waktu = explode('-', $req->waktu);
        DB::table('workshop')->insert([
            'gambar_workshop' => $NamaFile,
            'nama_workshop' => $req->nama,
            'waktu_workshop' => mktime(12, 0, 0, $Waktu[1], $Waktu[2], $Waktu[0]),
            'harga_workshop' => $req->harga,
            'deskripsi_workshop' => $req->deskripsi
        ]);
        return back();
    }
    public function EditWorkshop(Request $req) {
        $Waktu = explode('-', $req->waktu);
        DB::table('workshop')->where('id_workshop', $req->id)->update([
            'nama_workshop' => $req->nama,
            'waktu_workshop' => mktime(12, 0, 0, $Waktu[1], $Waktu[2], $Waktu[0]),
            'harga_workshop' => $req->harga,
            'deskripsi_workshop' => $req->deskripsi
        ]);
        return back();
    }
    public function HapusWorkshop(Request $req) {
        $Data = DB::table('workshop')->where('id_workshop', $req->id)->first();
        unlink('img/workshop/'.$Data->gambar_workshop);
        DB::table('workshop')->where('id_workshop', $req->id)->delete();
        return back();
    }
    public function Customer() {
        return view('customer/home');
    }
    public function ViewProduct() {
        $Produk = DB::table('produk')->get();
        return view('customer/product', compact('Produk'));
    }
    public function DetailProduct($id) {
        $Produk = DB::table('produk')->where('id_produk', $id)->first();
        return view('customer/detailProduct', compact('Produk'));
    }
    public function ViewWorkshop() {
        $Workshop = DB::table('workshop')->get();
        return view('customer/workshop', compact('Workshop'));
    }
    public function DetailWorkshop($id) {
        $Workshop = DB::table('workshop')->where('id_workshop', $id)->first();
        return view('customer/detailWorkshop', compact('Workshop'));
    }
}
