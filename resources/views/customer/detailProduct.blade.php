@extends('layout.main2')

<?php
function Rupiah($Angka) {
    $Angka = floatval($Angka);
    if (fmod($Angka, 1) == 0) {
        return 'Rp. '.number_format($Angka,0,',','.').',-';
    } else {
        return 'Rp. '.number_format($Angka,1,',','.').',-';
    }
}
?>

@section('container-fluid')
<div class="main-page" id="content" style="margin:20px;">
<div class="container-fluid">
    <div class="button-row" >
        <a href="{{ route('ViewProduct') }}" class="btn btn-outline-success btn-md mt-3 mb-4"  role="button" style="border-radius: 1rem;" ><i class="bi bi-arrow-left-circle-fill" aria-hidden="true"></i><b>  Back</b></a>
    </div>
</div>

<div class="container-xl">
    <div class="row row-cols-2 g-4 row-cols-md-2 mt-4 mb-4">
        <div class="image">
            <img src="{{ asset('img/produk/'.$Produk->gambar_produk) }}" alt="" width="100%">
        </div>
        <div class="main-detail">
            <h2 class="text-center"><b>{{ $Produk->nama_produk }}</b></h2>
            <hr class="soft my-3 bg-black">
            <h3 class="text-center mt-4">{{ Rupiah($Produk->harga_produk) }}</h3>
            <h5 class="text-justify mt-5"><b>Deskripsi Produk : </b></h5>
            <p>{{ $Produk->deskripsi_produk }}</p>
            <div class="button-row" >
                <a href="#" class="btn btn-success btn-md mt-4 mb-4"  role="button" style="border-radius: 1rem;" ><i class="bi bi-cart-dash-fill" aria-hidden="true"></i><b>  Beli Sekarang</b></a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection