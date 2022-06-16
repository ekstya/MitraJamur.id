<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Models\BuktiWorkshop;
use App\Models\BuktiPembelian;
use App\Models\PembayaranWorkshop;
use App\Models\PembayaranPembelian;
use App\Models\PendaftaranWorkshop;
use App\Http\Controllers\Controller;

class PemesananController extends Controller
{
    public function admin_index()
    {
        return view('admin.pemesanan.index');
    }

    public function index_pembelian()
    {
        $data = Pembelian::with(['user','user.desa.kecamatan.kabupaten.provinsi'])->join('detail_pembelian', 'pembelian.id', '=', 'detail_pembelian.pembelian_id')->leftjoin('produk', 'detail_pembelian.produk_id', '=', 'produk.id')->rightjoin('pembayaran_pembelian', 'pembelian.id', '=', 'pembayaran_pembelian.pembelian_id')->leftjoin('user','pembelian.user_id','=','user.id')->select('user.id','pembelian.user_id','user.namaUser','pembelian.id', 'detail_pembelian.id', 'detail_pembelian.pembelian_id', 'detail_pembelian.produk_id', 'pembelian.tanggalPembelian', 'pembelian.user_id', 'pembelian.totalPembelian', 'pembayaran_pembelian.id', 'pembayaran_pembelian.user_id', 'pembayaran_pembelian.pembelian_id', 'pembayaran_pembelian.statusPembayaran', 'produk.namaProduk', 'produk.id', 'produk.gambarProduk','produk.hargaProduk')->get();
        return view('admin.pemesanan.pembelian', compact('data'));
    }

    public function index_pendaftaran()
    {
        $data = PendaftaranWorkshop::join('workshop', 'pendaftaran_workshop.workshop_id', '=', 'workshop.id')->leftjoin('pembayaran_workshop', 'pendaftaran_workshop.id', '=', 'pembayaran_workshop.pendaftaran_workshop_id')->leftjoin('user','pembayaran_workshop.user_id','=','user.id')->select('user.id','user.namaUser','workshop.id', 'workshop.namaWorkshop', 'workshop.waktuWorkshop', 'workshop.hargaWorkshop', 'pendaftaran_workshop.tanggalPendaftaran', 'pendaftaran_workshop.id', 'pendaftaran_workshop.user_id', 'pendaftaran_workshop.workshop_id', 'pembayaran_workshop.user_id', 'pembayaran_workshop.pendaftaran_workshop_id', 'pembayaran_workshop.statusPembayaran','pembayaran_workshop.tanggalPembayaran')->get();
        return view('admin.pemesanan.pendaftaran', compact('data'));
    }

    public function index_pembelian_konfirmasi($pembelian_id)
    {
        $data = Pembelian::join('detail_pembelian', 'pembelian.id', '=', 'detail_pembelian.pembelian_id')->leftjoin('produk', 'detail_pembelian.produk_id', '=', 'produk.id')->rightjoin('pembayaran_pembelian', 'pembelian.id', '=', 'pembayaran_pembelian.pembelian_id')->leftjoin('user','pembelian.user_id','=','user.id')->select('user.id','pembelian.user_id','user.namaUser','pembelian.id', 'detail_pembelian.id', 'detail_pembelian.pembelian_id', 'detail_pembelian.produk_id', 'pembelian.tanggalPembelian', 'pembelian.user_id', 'pembelian.totalPembelian', 'pembayaran_pembelian.id', 'pembayaran_pembelian.user_id', 'pembayaran_pembelian.pembelian_id', 'pembayaran_pembelian.statusPembayaran', 'produk.namaProduk', 'produk.id', 'produk.gambarProduk','produk.hargaProduk')->where('pembayaran_pembelian.pembelian_id',$pembelian_id)->first();
        $bukti = BuktiPembelian::where('pembayaran_pembelian_id', $pembelian_id)->first();
        return view('admin.pemesanan.konfirmasi-pembelian', compact('data','bukti'));
    }
    
    public function index_pembelian_konfirmasi_terima($pembelian_id)
    {
        $data = PembayaranPembelian::where('pembelian_id', $pembelian_id);
        $datas = Pembelian::join('detail_pembelian', 'pembelian.id', '=', 'detail_pembelian.pembelian_id')->leftjoin('produk', 'detail_pembelian.produk_id', '=', 'produk.id')->rightjoin('pembayaran_pembelian', 'pembelian.id', '=', 'pembayaran_pembelian.pembelian_id')->leftjoin('user','pembelian.user_id','=','user.id')->select('user.id','pembelian.user_id','user.namaUser','pembelian.id', 'detail_pembelian.id', 'detail_pembelian.pembelian_id', 'detail_pembelian.produk_id', 'pembelian.tanggalPembelian', 'pembelian.user_id', 'pembelian.totalPembelian', 'pembayaran_pembelian.id', 'pembayaran_pembelian.user_id', 'pembayaran_pembelian.pembelian_id', 'pembayaran_pembelian.statusPembayaran', 'produk.namaProduk', 'produk.id', 'produk.gambarProduk','produk.hargaProduk','produk.stokProduk')->where('pembayaran_pembelian.pembelian_id',$pembelian_id)->first();
        $data->update([
            'statusPembayaran' => 'Dikonfirmasi'
        ]);
        return redirect('/admin/pemesanan/pembelian');
    }
    
    public function index_pembelian_konfirmasi_tolak($pembelian_id)
    {
        $data = PembayaranPembelian::where('pembelian_id', $pembelian_id);
        $datas = Pembelian::join('detail_pembelian', 'pembelian.id', '=', 'detail_pembelian.pembelian_id')->leftjoin('produk', 'detail_pembelian.produk_id', '=', 'produk.id')->rightjoin('pembayaran_pembelian', 'pembelian.id', '=', 'pembayaran_pembelian.pembelian_id')->leftjoin('user','pembelian.user_id','=','user.id')->select('user.id','pembelian.user_id','user.namaUser','pembelian.id', 'detail_pembelian.id', 'detail_pembelian.pembelian_id', 'detail_pembelian.produk_id', 'pembelian.tanggalPembelian', 'pembelian.user_id', 'pembelian.totalPembelian', 'pembayaran_pembelian.id', 'pembayaran_pembelian.user_id', 'pembayaran_pembelian.pembelian_id', 'pembayaran_pembelian.statusPembayaran', 'produk.namaProduk', 'produk.id', 'produk.gambarProduk','produk.hargaProduk','produk.stokProduk')->where('pembayaran_pembelian.pembelian_id',$pembelian_id)->first();

        $data->update([
            'statusPembayaran' => 'Ditolak'
        ]);
        Produk::where('id',$datas->produk_id)->update(['stokProduk'=>$datas->stokProduk+$datas->totalPembelian]);
        return redirect('/admin/pemesanan/pembelian');
    }

    public function index_pendaftaran_konfirmasi($pendaftaran_workshop_id)
    {
        $data = PendaftaranWorkshop::join('workshop', 'pendaftaran_workshop.workshop_id', '=', 'workshop.id')->leftjoin('pembayaran_workshop', 'pendaftaran_workshop.id', '=', 'pembayaran_workshop.pendaftaran_workshop_id')->leftjoin('user','pembayaran_workshop.user_id','=','user.id')->select('user.id','user.namaUser','workshop.id', 'workshop.namaWorkshop', 'workshop.waktuWorkshop', 'workshop.hargaWorkshop', 'pendaftaran_workshop.tanggalPendaftaran', 'pendaftaran_workshop.id', 'pendaftaran_workshop.user_id', 'pendaftaran_workshop.workshop_id', 'pembayaran_workshop.user_id', 'pembayaran_workshop.pendaftaran_workshop_id', 'pembayaran_workshop.statusPembayaran','pembayaran_workshop.tanggalPembayaran')->where('pembayaran_workshop.pendaftaran_workshop_id',$pendaftaran_workshop_id)->first();
        $bukti = BuktiWorkshop::where('pembayaran_workshop_id', $pendaftaran_workshop_id)->first();
        return view('admin.pemesanan.konfirmasi-pendaftaran', compact('data','bukti'));
    }

    public function index_pendaftaran_konfirmasi_terima($pendaftaran_workshop_id)
    {
        $data = PembayaranWorkshop::where('pendaftaran_workshop_id', $pendaftaran_workshop_id)->update([
            'statusPembayaran' => 'Dikonfirmasi'
        ]);
        return redirect('/admin/pemesanan/pendaftaran');
    }
    
    public function index_pendaftaran_konfirmasi_tolak($pendaftaran_workshop_id)
    {
        $data = PembayaranWorkshop::where('pendaftaran_workshop_id', $pendaftaran_workshop_id)->update([
            'statusPembayaran' => 'Ditolak'
        ]);
        return redirect('/admin/pemesanan/pendaftaran');
    }
}
