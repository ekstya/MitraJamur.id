@extends('layout.main2')

@section('container-fluid')
<div class="main-page" id="content" style="margin:20px;">
<div class="container-fluid">
    <div class="button-row" >
        <a href="/viewWorkshop" class="btn btn-outline-success btn-md mt-3 mb-4"  role="button" style="border-radius: 1rem;" ><i class="bi bi-arrow-left-circle-fill" aria-hidden="true"></i><b>  Back</b></a>
    </div>

    <div class="text-row">
        <h2 class="title text-center mb-5"><b>WORKSHOP TERDAFTAR</b></h2>
    </div>

    <div class="container">
        <div class="card mb-3">
            <div class="card-header">
                Workshop
            </div>
            <div class="card-body">
                <h5 class="card-title mb-2 mt-2"><b> Judul Workshop</b></h5>
                    <div class="text-row mt-3 mb-2">
                        <h7 class="card-text" style="margin-right:80px; opacity:90%;"><i class="bi bi-calendar-week-fill" aria-hidden="true"></i> Sabtu, 09 April 2022</h7>
                        <h7 class="card-text" style="margin-left:80px; opacity:90%;"><i class="bi bi-clock-fill" aria-hidden="true"></i> 12.00 - 15.00 WIB</h7>
                    </div>
                    <h7 class="card-text" style="margin-right:80px; opacity:90%;"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i> Lokasinyaaaa tulis disinii</h7>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                Workshop
            </div>
            <div class="card-body">
                <h5 class="card-title mb-2 mt-2"><b> Judul Workshop</b></h5>
                    <div class="text-row mt-3 mb-2">
                        <h7 class="card-text" style="margin-right:80px; opacity:90%;"><i class="bi bi-calendar-week-fill" aria-hidden="true"></i> Sabtu, 09 April 2022</h7>
                        <h7 class="card-text" style="margin-left:80px; opacity:90%;"><i class="bi bi-clock-fill" aria-hidden="true"></i> 12.00 - 15.00 WIB</h7>
                    </div>
                    <h7 class="card-text" style="margin-right:80px; opacity:90%;"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i> Lokasinyaaaa tulis disinii</h7>
            </div>
        </div>
    </div>
</div>
@endsection
