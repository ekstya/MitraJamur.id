@extends('admin.dashboard')
@section('page-heading')
<div class="card-body">
    <div class="text-xs font-weight-bold text-success text-uppercase">
        <h1><b>Halaman Detail Produk</b></h1>
    </div>
</div>
@endsection

@section('konten') 
<div class="col-xl-12 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="row">
            <div class="col-md-8">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Detail Data Produk</h6>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('foto-produk/'.$data->gambarProduk) }}" style="width: 250px;" alt="">
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4"><h5 style="color:black; font-family:comic sans ms">Nama Produk</h5></div>
                        <div class="col-md-8"><h5 style="color:black;">: {{$data->namaProduk}}</h5></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h5 style="color:black; font-family:comic sans ms">Harga Produk</h5></div>
                        <div class="col-md-8"><h5 style="color:black;">: Rp {{number_format($data->hargaProduk)}}</h5></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h5 style="color:black; font-family:comic sans ms">Stok Produk</h5></div>
                        <div class="col-md-8"><h5 style="color:black;">: {{$data->stokProduk}}</h5></div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-4"><h5 style="color:black; font-family:comic sans ms">Deskripsi Produk</h5></div>
                        <div class="col-md-8"><h5 style="color:black;">: {{$data->deskripsiProduk}}</h5></div>
                    </div>
                    <div class="row mb-3">
                        <a href="/admin/produk/edit/{{$data->id}}" class="btn btn-warning btn-sm mr-2">Ubah Produk</a>
                        <a href="" class="btn btn-danger btn-sm">Hapus Produk</a>
                    </div>
                    <div class="row">
                        <a href="/admin/produk" class="btn btn-secondary btn-sm mr-2"><span class="fas fa-arrow-left"></span> Kembali ke Halaman Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection