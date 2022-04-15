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
        <a href="{{ route('Customer') }}" class="btn btn-outline-success btn-md mt-3 mb-4"  role="button" style="border-radius: 1rem;" ><i class="bi bi-arrow-left-circle-fill" aria-hidden="true"></i><b>  Back</b></a>
    </div>
    <div class="text-row mt-3 mb-5">
        <h2 class="title text-center"><b>PRODUCT</b></h2>
    </div>
    <div class="container-xl">
        <div class="row row-cols-3 g-4 row-cols-md-5 mt-4 mb-4 justify-content-center">
            @foreach ($Produk as $dt)    
            <div class="col">
                <div class="card">
                    <div class="overflow-hidden"
                        style="height: 10rem; background: url('{{ asset('img/produk/'.$dt->gambar_produk) }}'); background-size: cover; background-position: center;">
                    </div>
                    <div class="card-body">
                        <h5 class="title-card text-center mt-2 mb-2"><b>{{ $dt->nama_produk }}</b></h5>
                        <div class="row row-col-3">
                            <h6 class="col mb-3 mt-2 text-center">{{ Rupiah($dt->harga_produk) }}</h6>
                        </div>
                        <div class="row">
                        <a class="btn btn-outline-success btn-sm" href="{{ url('Customer/DetailProduct/'.$dt->id_produk) }}" type="button">Detail Produk</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

@endsection