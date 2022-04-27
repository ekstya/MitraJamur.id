<?php

namespace App\Http\Controllers;

use App\Models\BuktiWorkshop;
use App\Models\PembayaranWorkshop;
use App\Models\PendaftaranWorkshop;
use Illuminate\Http\Request;
use App\Models\Workshop;
use Illuminate\Support\Facades\Auth;

class WorkshopController extends Controller
{
    public function admin_workshop()
    {
        $data = Workshop::all();
        return view('admin.workshop.index', compact('data'));
    }

    public function admin_workshop_create()
    {
        return view('admin.workshop.create');
    }

    public function admin_workshop_insert(Request $request)
    {
        $data = Workshop::create($request->all());
        if($request->hasFile('gambarWorkshop')){
            $request->file('gambarWorkshop')->move('foto-workshop/', $request->file('gambarWorkshop')->getClientOriginalName());
            $data->gambarWorkshop = $request->file('gambarWorkshop')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin_workshop');
    }

    public function admin_workshop_edit($id)
    {
        $data = Workshop::all()->where('id',$id)->first();

        return view('admin.workshop.edit', compact('data'));
    }

    public function admin_workshop_update(Request $request, $id)
    {
        $ambil = Workshop::findorfail($id);
        $gambar = $ambil->gambarWorkshop;
        $gambar_workshop = $request->gambarWorkshop;

        if(isset($gambar_workshop)){
            $data = [
                'namaWorkshop' => $request->namaWorkshop,
                'hargaWorkshop' => $request->hargaWorkshop,
                'waktuWorkshop' => $request->waktuWorkshop,
                'deskripsiWorkshop' => $request->deskripsiWorkshop,
                'gambarWorkshop' => $gambar,
            ];
            $request->gambarWorkshop->move(public_path().'/foto-workshop',$gambar);
        }else{
            $data = [
                'namaWorkshop' => $request->namaWorkshop,
                'hargaWorkshop' => $request->hargaWorkshop,
                'waktuWorkshop' => $request->waktuWorkshop,
                'deskripsiWorkshop' => $request->deskripsiWorkshop
            ];
        }
        $ambil->update($data);

        return redirect('admin/workshop');
    }

    public function admin_workshop_detail($id)
    {
        $data = Workshop::all()->where('id',$id)->first();

        return view('admin.workshop.detail', compact('data'));
    }

    public function user_workshop()
    {
        $data = Workshop::all();
        return view('user.workshop.index', compact('data'));
    }

    public function user_workshop_detail($id)
    {
        $data = Workshop::select('id','namaWorkshop','gambarWorkshop','waktuWorkshop','hargaWorkshop','deskripsiWorkshop')->where('id',$id)->first();
        return view('user.workshop.detail',compact('data'));
    }

    public function user_workshop_daftar(Request $request)
    {
        $data = PendaftaranWorkshop::insert([
            'tanggalPendaftaran' => $request->tanggalPendaftaran,
            'user_id' => $request->user_id,
            'workshop_id' => $request->workshop_id,
        ]);

        $pendaftaranid = PendaftaranWorkshop::select('id')->orderBy('id','desc')->first();
        $pendaftaranid=$pendaftaranid['id'];
        PembayaranWorkshop::create([
            'user_id' => $request->user_id,
            'pendaftaran_workshop_id' => $pendaftaranid,
            'statusPembayaran' => 'BelumBayar'
        ]);

        return redirect('/user/partisipasi');
    }

    public function user_partisipasi()
    {
        $data = PendaftaranWorkshop::join('workshop','pendaftaran_workshop.workshop_id','=','workshop.id')->leftjoin('pembayaran_workshop','pendaftaran_workshop.id','=','pembayaran_workshop.pendaftaran_workshop_id')->select('workshop.id','workshop.namaWorkshop','workshop.waktuWorkshop','workshop.hargaWorkshop','pendaftaran_workshop.tanggalPendaftaran','pendaftaran_workshop.id','pendaftaran_workshop.user_id','pendaftaran_workshop.workshop_id','pembayaran_workshop.user_id','pembayaran_workshop.pendaftaran_workshop_id','pembayaran_workshop.statusPembayaran')->where('pendaftaran_workshop.user_id',Auth::user()->id)->get();

        return view('user.partisipasi.index', compact('data'));
    }
    
    public function user_konfirmasi_partisipasi()
    {
        $data = PendaftaranWorkshop::join('workshop','pendaftaran_workshop.workshop_id','=','workshop.id')->leftjoin('pembayaran_workshop','pendaftaran_workshop.id','=','pembayaran_workshop.pendaftaran_workshop_id')->select('workshop.id','workshop.namaWorkshop','workshop.waktuWorkshop','workshop.hargaWorkshop','pendaftaran_workshop.tanggalPendaftaran','pendaftaran_workshop.id','pendaftaran_workshop.user_id','pendaftaran_workshop.workshop_id','pembayaran_workshop.user_id','pembayaran_workshop.pendaftaran_workshop_id','pembayaran_workshop.statusPembayaran','workshop.gambarWorkshop')->where('pendaftaran_workshop.user_id',Auth::user()->id)->first();

        return view('user.partisipasi.konfirmasi', compact('data'));
    }

    public function user_konfirmasi_partisipasi_post(Request $request, $pendaftaran_workshop_id)
    {
        PembayaranWorkshop::where('pendaftaran_workshop_id', $pendaftaran_workshop_id)->update([
            'tanggalPembayaran' => $request->tanggalPembayaran,
            'statusPembayaran' => 'MenungguKonfirmasi'
        ]);

        $data = BuktiWorkshop::create($request->all());
        if ($request->hasFile('bukti')) {
            $request->file('bukti')->move('bukti-workshop/', $request->file('bukti')->getClientOriginalName());
            $data->bukti = $request->file('bukti')->getClientOriginalName();
            $data->save();
        }
        return redirect('/user/dashboard');
    }
}
