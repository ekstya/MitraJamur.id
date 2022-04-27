<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\PendaftaranWorkshop;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }

    public function laporan_pembelian()
    {
        $data = Pembelian::join('detail_pembelian', 'pembelian.id', '=', 'detail_pembelian.pembelian_id')->leftjoin('produk', 'detail_pembelian.produk_id', '=', 'produk.id')->rightjoin('pembayaran_pembelian', 'pembelian.id', '=', 'pembayaran_pembelian.pembelian_id')->leftjoin('user','pembelian.user_id','=','user.id')->select('user.id','pembelian.user_id','user.namaUser','pembelian.id', 'detail_pembelian.id', 'detail_pembelian.pembelian_id', 'detail_pembelian.produk_id', 'pembelian.tanggalPembelian', 'pembelian.user_id', 'pembelian.totalPembelian', 'pembayaran_pembelian.id', 'pembayaran_pembelian.user_id', 'pembayaran_pembelian.pembelian_id', 'pembayaran_pembelian.statusPembayaran', 'produk.namaProduk', 'produk.id', 'produk.gambarProduk')->get();
        return view('admin.laporan.pembelian', compact('data'));
    }

    public function laporan_pendaftaran()
    {
        $data = PendaftaranWorkshop::join('workshop', 'pendaftaran_workshop.workshop_id', '=', 'workshop.id')->leftjoin('pembayaran_workshop', 'pendaftaran_workshop.id', '=', 'pembayaran_workshop.pendaftaran_workshop_id')->leftjoin('user','pembayaran_workshop.user_id','=','user.id')->select('user.id','user.namaUser','workshop.id', 'workshop.namaWorkshop', 'workshop.waktuWorkshop', 'workshop.hargaWorkshop', 'pendaftaran_workshop.tanggalPendaftaran', 'pendaftaran_workshop.id', 'pendaftaran_workshop.user_id', 'pendaftaran_workshop.workshop_id', 'pembayaran_workshop.user_id', 'pembayaran_workshop.pendaftaran_workshop_id', 'pembayaran_workshop.statusPembayaran','pembayaran_workshop.tanggalPembayaran')->get();

        return view('admin.laporan.pendaftaran', compact('data'));
    }
}
