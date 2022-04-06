@extends('layout.main')

@section('container-fluid')
<header class="py-4" style="background-color: #91C788;">
    <div class="container px-4">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-uppercase text-black mb-2">MitraJamur.id</h1>
                    <p class="lead fw-normal text-black-30 mb-5">Mitra Jamur Indonesia adalah sebuah Pusat pelatihan, penyediaan, dan pengolahan jamur terpadu yang terletak di Kecamatan Gebang, Kota Jember, Jawa Timur.</p>
                    <div class="d-grid gap-3 mt-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-success btn-lg px-4 me-sm-3" href="/login">Login</a>
                        <a class="btn btn-outline-dark btn-lg px-4" href="/register">Register <span class="bi bi-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5 justify-content-end" src="img/jamoer.png" alt="logo" /></div>
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

                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Fresh Item</div>
                        <img class="card-img-top" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//94/MTA-7228336/rumah_sayur_rumah_sayur_jakarta_utara_jamur_tiram_-250_gram-_full02_ey3ztoiw.jpg" alt="jamur segar" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Jamur Tiram Segar</h5>
                                Rp19.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="kaldu jamur" />
                        <div class="card-body p-4">
                            <div class="text-center">                              
                                <h5 class="fw-bolder">Kaldu Jamur</h5>                               
                                Rp20.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Fresh Item</div> -->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="sosis jamur" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Sosis Jamur</h5>
                                Rp25.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Fresh Item</div> -->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="kebab jamur" />
                            <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Kebab Jamur</h5>
                                Rp30.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View More</a></div>
                        </div>
                    </div>
                </div>
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

                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #91C788;">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Pelatihan Olahan Jamur Tiram</h5>
                                Rp50.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-light btn-success mt-auto" href="#">View More</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100" style="background-color: #91C788;">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Pelatihan Pembudidayaan Jamur Tiram</h5>
                                Rp50.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-light btn-success mt-auto" href="#">View More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
