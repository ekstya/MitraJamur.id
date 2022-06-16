<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pembelian;
use App\Models\JadwalPanen;
use Illuminate\Http\Request;
use App\Models\DetailPembelian;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\PembayaranPembelian;
use App\Models\PendaftaranWorkshop;
use App\Models\Produk;
use App\Models\Workshop;

class DashboardController extends Controller
{
    public function user_dashboard()
    {
        return view('user.dashboard');
    }
    public function admin_dashboard()
    {
        $customer = User::where('role','user')->count();
        $jadwal_panen = JadwalPanen::all()->count();
        $pembelian = Pembelian::join('detail_pembelian', 'pembelian.id', '=', 'detail_pembelian.pembelian_id')->leftjoin('produk', 'detail_pembelian.produk_id', '=', 'produk.id')->rightjoin('pembayaran_pembelian', 'pembelian.id', '=', 'pembayaran_pembelian.pembelian_id')->leftjoin('user','pembelian.user_id','=','user.id')->select('user.id','pembelian.user_id','user.namaUser','pembelian.id', 'detail_pembelian.id', 'detail_pembelian.pembelian_id', 'detail_pembelian.produk_id', 'pembelian.tanggalPembelian', 'pembelian.user_id', 'pembelian.totalPembelian', 'pembayaran_pembelian.id', 'pembayaran_pembelian.user_id', 'pembayaran_pembelian.pembelian_id', 'pembayaran_pembelian.statusPembayaran', 'produk.namaProduk', 'produk.id', 'produk.gambarProduk','produk.hargaProduk')->where('pembayaran_pembelian.statusPembayaran','Dikonfirmasi')->get();
        $best_seller = DetailPembelian::join('pembelian', 'pembelian.id', '=', 'detail_pembelian.pembelian_id')
        ->leftjoin('produk', 'detail_pembelian.produk_id', '=', 'produk.id')
        ->select(DB::raw('detail_pembelian.produk_id,sum(pembelian.totalPembelian) as jumlah'))
        ->groupBy('produk_id')
        ->orderBy('jumlah','desc')
        ->limit(1)->first();

        $hot_topic= PendaftaranWorkshop::join('pembayaran_workshop', 'pendaftaran_workshop.id', '=', 'pembayaran_workshop.pendaftaran_workshop_id')
        ->select(DB::raw('pendaftaran_workshop.workshop_id,SUM(pendaftaran_workshop.workshop_id) as jumlah_pendaftaran'))
        ->groupBy('pendaftaran_workshop.workshop_id')
        ->orderBy('jumlah_pendaftaran','desc')
        ->limit(1)->first();
        
        if ($best_seller != null) {
            $produk_best_seller = Produk::where('id',$best_seller['produk_id'])->get();
        } else{
            $produk_best_seller = null;
        }

        if ($hot_topic != null) {
            $workshop_hot_topic =Workshop::where('id',$hot_topic['workshop_id'])->first();
        } else {
            $workshop_hot_topic = null;
        }
        return view('admin.dashboard',[
            'customer'=>$customer,
            'jadwal_panen'=>$jadwal_panen,
            'pembelian'=> $pembelian,
            'best_seller'=>$produk_best_seller,
            'workshop_hot_topic'=>$workshop_hot_topic
        ]);
    }
}
