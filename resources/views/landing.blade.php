@extends('layout.main')

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
<header class="py-4" style="background-color: #91C788;">
    <div class="container px-3">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-uppercase text-black mb-2">MitraJamur.id</h1>
                    <p class="lead fw-normal text-black-30 mb-5">Mitra Jamur Indonesia adalah sebuah Pusat pelatihan, penyediaan, dan pengolahan jamur terpadu yang terletak di Kecamatan Gebang, Kota Jember, Jawa Timur.</p>
                    <div class="d-grid gap-3 mt-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-success btn-lg px-4 me-sm-3" href="{{ route('Login') }}">Login</a>
                        <a class="btn btn-outline-dark btn-lg px-4" href="{{ route('Register') }}">Register <span class="bi bi-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><a href="{{ route('Landing') }}"><img class="img-fluid rounded-3 my-5 justify-content-end" src="{{ asset('img/jamoer.png') }}" alt="Logo"></a></div>
        </div>
    </div>
</header>

<section class="page-section product mt-5" id="product">
    <div class="container-fluid px-4 pg-lg-5">
        <h3 class="page-section-heading text-center text-uppercase mt-5 mb-3"><b>PRODUCT</b></h3>
        <h5 class="text-center mb-5">What We Sell</h5>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($Produk as $dt)    
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Fresh Item</div>
                        <div class="overflow-hidden"
                            style="height: 15rem; background: url('{{ asset('img/produk/'.$dt->gambar_produk) }}'); background-size: cover; background-position: center;">
                        </div>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{ $dt->nama_produk }}</h5>
                                {{ Rupiah($dt->harga_produk) }}
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#product">View More</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>        
    </div>
</section>

<section class="page-section Workshop" id="workshop">
    <div class="container-fluid px-4 pg-lg-5 mt-3">
    <h3 class="page-section-heading text-center text-uppercase mt-2 mb-3"><b>WORKSHOP</b></h3>
    <h5 class="text-center mb-5">More Knowledge for You</h5>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($Workshop as $dt) 
                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #91C788;">
                        <div class="overflow-hidden"
                            style="height: 15rem; background: url('{{ asset('img/workshop/'.$dt->gambar_workshop) }}'); background-size: cover; background-position: center;">
                        </div>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{ $dt->nama_workshop }}</h5>
                                {{ Rupiah($dt->harga_workshop) }}
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-light btn-success mt-auto" href="#workshop">View More</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
@endsection
