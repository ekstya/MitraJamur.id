<?php

namespace App\Http\Controllers;

use App\Models\BuktiPembelian;
use App\Models\DetailPembelian;
use App\Models\PembayaranPembelian;
use App\Models\Pembelian;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function admin_produk()
    {
        $data = Produk::all();
        return view('admin.produk.index', compact('data'));
    }

    public function admin_produk_create()
    {
        return view('admin.produk.create');
    }

    public function admin_produk_insert(Request $request)
    {
        $data = Produk::create($request->all());
        if ($request->hasFile('gambarProduk')) {
            $request->file('gambarProduk')->move('foto-produk/', $request->file('gambarProduk')->getClientOriginalName());
            $data->gambarProduk = $request->file('gambarProduk')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin_produk');
    } 

    public function admin_produk_edit($id)
    {
        $data = Produk::all()->where('id', $id)->first();

        return view('admin.produk.edit', compact('data'));
    }

    public function admin_produk_update(Request $request, $id)
    {
        $ambil = Produk::findorfail($id);
        $gambar = $ambil->gambarProduk;

        $foto_produk = $request->gambarProduk;
        if (isset($foto_produk)) {
            $data = [
                'namaProduk' => $request->namaProduk,
                'hargaProduk' => $request->hargaProduk,
                'stokProduk' => $request->stokProduk,
                'deskripsiProduk' => $request->deskripsiProduk,
                'gambarProduk' => $gambar,
            ];
            $request->gambarProduk->move(public_path() . '/foto-produk', $gambar);
        } else {
            $data = [
                'namaProduk' => $request->namaProduk,
                'hargaProduk' => $request->hargaProduk,
                'stokProduk' => $request->stokProduk,
                'deskripsiProduk' => $request->deskripsiProduk,
            ];
        }
        $ambil->update($data);

        return redirect('admin/produk');
    }

    public function admin_produk_detail($id)
    {
        $data = Produk::all()->where('id', $id)->first();

        return view('admin.produk.detail', compact('data'));
    }

    public function user_produk()
    {
        $data = Produk::all();

        return view('user.produk.index', compact('data'));
    }

    public function user_produk_detail($id)
    {
        $data = Produk::select('id', 'namaProduk', 'gambarProduk', 'stokProduk', 'hargaProduk', 'deskripsiProduk')->where('id', $id)->first();
        return view('user.produk.detail', compact('data'));
    }

    public function user_produk_pesan(Request $request, $id)
    {
        Pembelian::create([
            'tanggalPembelian' => $request->tanggalPembelian,
            'user_id' => $request->user_id,
            'totalPembelian' => $request->totalPembelian,
        ]);

        $pembelianid = Pembelian::select('id')->orderBy('id', 'desc')->first();
        $pembelianid = $pembelianid['id'];

        DetailPembelian::create([
            'pembelian_id' => $pembelianid,
            'produk_id' => $request->produk_id
        ]);

        $produk = Produk::where('id',$request->produk_id)->first();
        $produk->update(['stokProduk'=>$produk['stokProduk']-$request->totalPembelian]);

        PembayaranPembelian::create([
            'user_id' => $request->user_id,
            'pembelian_id' => $pembelianid,
            'statusPembayaran' => 'BelumBayar'
        ]);

        return redirect('/user/pemesanan');
    }

    public function user_pemesanan()
    {
        $data = Pembelian::join('detail_pembelian', 'pembelian.id', '=', 'detail_pembelian.pembelian_id')->leftjoin('produk', 'detail_pembelian.produk_id', '=', 'produk.id')->rightjoin('pembayaran_pembelian', 'pembelian.id', '=', 'pembayaran_pembelian.pembelian_id')->select('pembelian.id', 'detail_pembelian.id', 'detail_pembelian.pembelian_id', 'detail_pembelian.produk_id', 'pembelian.tanggalPembelian', 'pembelian.user_id', 'pembelian.totalPembelian', 'pembayaran_pembelian.id', 'pembayaran_pembelian.user_id', 'pembayaran_pembelian.pembelian_id', 'pembayaran_pembelian.statusPembayaran', 'produk.namaProduk', 'produk.id', 'produk.gambarProduk','produk.hargaProduk')->where('Pembelian.user_id', Auth::user()->id)->get();

        return view('user.pemesanan.index', compact('data'));
    }

    public function user_konfirmasi_pemesanan($pembelian_id)
    {
        $data = Pembelian::join('detail_pembelian', 'pembelian.id', '=', 'detail_pembelian.pembelian_id')->leftjoin('produk', 'detail_pembelian.produk_id', '=', 'produk.id')->rightjoin('pembayaran_pembelian', 'pembelian.id', '=', 'pembayaran_pembelian.pembelian_id')->select('pembelian.id', 'detail_pembelian.id', 'detail_pembelian.pembelian_id', 'detail_pembelian.produk_id', 'pembelian.tanggalPembelian', 'pembelian.user_id', 'pembelian.totalPembelian', 'pembayaran_pembelian.id', 'pembayaran_pembelian.user_id', 'pembayaran_pembelian.pembelian_id', 'pembayaran_pembelian.statusPembayaran', 'produk.namaProduk', 'produk.id', 'produk.gambarProduk','produk.hargaProduk')->where([['Pembelian.user_id', Auth::user()->id], ['pembayaran_pembelian.pembelian_id', $pembelian_id]])->first();

        return view('user.pemesanan.konfirmasi', compact('data'));
    }

    public function user_konfirmasi_pemesanan_post(Request $request, $pembelian_id)
    {
        PembayaranPembelian::where('pembelian_id', $pembelian_id)->update([
            'tanggalPembayaran' => $request->tanggalPembayaran,
            'statusPembayaran' => 'MenungguKonfirmasi'
        ]);

        $data = BuktiPembelian::create($request->all());
        if ($request->hasFile('bukti')) {
            $request->file('bukti')->move('bukti/', $request->file('bukti')->getClientOriginalName());
            $data->bukti = $request->file('bukti')->getClientOriginalName();
            $data->save();
        }
        return redirect('/user/dashboard');
    }
}
