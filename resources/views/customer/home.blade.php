@extends('layout.main2')

@section('container-fluid')
<header class="py-1" style="background-color: #91C788;">
    <div class="container px-1">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-6 fw-bolder text-uppercase text-black mb-2">MitraJamur.id</h1>
                    <p class="lead fw-normal text-black-30 mb-5">Mitra Jamur Indonesia adalah sebuah Pusat pelatihan, penyediaan, dan pengolahan jamur terpadu yang terletak di Kecamatan Gebang, Kota Jember, Jawa Timur.</p>
                    <div class="d-grid gap-3 mt-5 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-success btn-lg px-4 me-sm-3" href="{{ route('Logout') }}">Logout</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-2 justify-content-end" src="{{ asset('img/jamoer.png') }}" alt="logo" /></div>
        </div>
    </div>
</header>

<section class="page-section content mt-5 mb-5" id="content">
    <div class="container px-4 pg-lg-5 ">
        <h2 class="page-section-heading text-center text-uppercase mt-5 mb-5"><b>KATEGORI</b></h2>
        
        <div class="row justify-content-center mb-3 mt-3">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <div class="col mb-5">
                    <div class="card h-100 mb-3" >
                    <a class="card-body rounded btn btn-outline-success" type="button" style="background-color:#91C788;" href="{{ route('ViewProduct') }}">
                        <h4 class="card-title text-center text-black mt-5 mb-5" style="font-family:' Verdana';"><b>PRODUCT</b></h4>
                    </a>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100 mb-3" >
                    <a class="card-body rounded btn btn-outline-success" type="button" style="background-color:#91C788;" href="{{ route('ViewWorkshop') }}">
                        <h4 class="card-title text-center text-black mt-5 mb-5" style="font-family:' Verdana';"><b>WORKSHOP</b></h4>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection