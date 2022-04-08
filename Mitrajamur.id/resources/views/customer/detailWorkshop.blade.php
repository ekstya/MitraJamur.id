@extends('layout.main2')

@section('container-fluid')
<div class="main-page" id="content" style="margin:20px;">
<div class="container-fluid">
    <div class="button-row" >
        <a href="/viewWorkshop" class="btn btn-outline-success btn-md mt-3 mb-4"  role="button" style="border-radius: 1rem;" ><i class="bi bi-arrow-left-circle-fill" aria-hidden="true"></i><b>  Back</b></a>
    </div>
</div>

<div class="container-xl">
    <div class="row row-cols-2 g-4 row-cols-md-2 mt-4 mb-4">
        <div class="image">
            <img src="https://dummyimage.com/500x450/dee2e6/6c757d.jpg" alt="">
        </div>
        <div class="main-detail">
            <h2 class="text-center"><b>Nama Workshop</b></h2>
            <hr class="soft my-3 bg-black">
            <h3 class="text-center mt-4">Rp. hargaaa</h3>
            <h5 class="text-justify mt-5"><b>Waktu : </b></h5>
            <p>Jumat, 08 April 2022 (12.00 - 14.00)</p>
            <h5 class="text-justify mt-3"><b>Deskripsi Workshop : </b></h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis laudantium temporibus doloribus. Architecto tempore labore suscipit nobis modi delectus quaerat reprehenderit. Ratione fugiat dignissimos dolor, inventore quia illum in alias quis eveniet animi doloremque fuga distinctio harum, quidem, iusto aliquid. Sed recusandae atque iure nam, dolor sit animi iste suscipit perferendis quis blanditiis quas similique reprehenderit repellat ad corrupti necessitatibus facilis dignissimos ipsa delectus id. Sunt, assumenda deleniti fugiat error consequatur enim repudiandae fugit aperiam minus possimus praesentium, temporibus hic placeat, consequuntur sint. Recusandae minima tempore quisquam beatae harum, culpa, neque dolores quibusdam at quae perspiciatis totam? Amet, optio enim!</p>
            <div class="button-row" >
                <a href="daftarWorkshop" class="btn btn-success btn-md mt-4 mb-4"  role="button" style="border-radius: 1rem;" ><i class="bi bi-bookmark-star-fill" aria-hidden="true"></i><b>  Daftar Sekarang</b></a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection