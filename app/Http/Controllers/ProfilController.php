<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $data = User::where('id', Auth::user()->id)->first();
        $desa = Desa::join('kecamatan', 'desa.kecamatan_id', '=', 'kecamatan.id')->leftjoin('kabupaten', 'kecamatan.kabupaten_id', '=', 'kabupaten.id')->leftjoin('provinsi','kabupaten.provinsi_id','=','provinsi.id')->select('desa.id','desa.namaDesa','kecamatan.namaKecamatan','kabupaten.namaKabupaten','provinsi.namaProvinsi')->get();
        if (Auth::user()->role == 'admin') {
            return view('admin.profil', compact('data'));
        } else {
            return view('user.profil', [
                'data'=>$data,
                'desa'=>$desa
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $datas = Desa::join('kecamatan', 'desa.kecamatan_id', '=', 'kecamatan.id')->leftjoin('kabupaten', 'kecamatan.kabupaten_id', '=', 'kabupaten.id')->leftjoin('provinsi','kabupaten.provinsi_id','=','provinsi.id')->select('desa.id','desa.namaDesa','kecamatan.id','kecamatan.namaKecamatan','kabupaten.id','kabupaten.namaKabupaten','provinsi.id','provinsi.namaProvinsi')->where('desa.id',$request->desa)->first();
        $data = User::where('id', $id)->update([
            'username' => $request->username,
            'namaUser' => $request->namaUser,
            'noHp' => $request->noHp,
            'email' => $request->email,
            'desa_id'=>$request->desa
        ]);

        return back();
    }
}
