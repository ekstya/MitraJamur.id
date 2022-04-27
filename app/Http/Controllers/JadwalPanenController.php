<?php

namespace App\Http\Controllers;

use App\Models\JadwalPanen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalPanenController extends Controller
{
    public function index()
    {
        $data = JadwalPanen::all();
        return view('admin.jadwal_panen.index', compact('data'));
    }

    public function create()
    {
        return view('admin.jadwal_panen.create');
    }

    public function insert(Request $request)
    {
        JadwalPanen::create([
            'tanggalMulai' => $request->tanggalMulai,
            'jumlahBaglog' => $request->jumlahBaglog,
            'musim' => $request->musim,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/admin/jadwal_panen');
    }

    public function edit($id)
    {
        $data = JadwalPanen::where('id',$id)->first();

        return view('admin.jadwal_panen.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = JadwalPanen::where('id',$id)->update([
            'tanggalMulai' => $request->tanggalMulai,
            'jumlahBaglog' => $request->jumlahBaglog,
            'musim' => $request->musim
        ]);

        return redirect('/admin/jadwal_panen');
    }

    public function delete($id)
    {
        $data = JadwalPanen::where('id',$id)->first();
        $data->delete();

        return redirect('/admin/jadwal_panen');
    }
}
