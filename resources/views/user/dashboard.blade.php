<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MitraJamur.Id</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/01ab9e1577.js" crossorigin="anonymous"></script>
    <style type="text/css">* {cursor: url(https://cur.cursors-4u.net/cursors/cur-2/cur222.cur), auto !important;}</style><a href="https://www.cursors-4u.com/cursor/2008/12/17/cool-neon-green-outer-glow-pointer.html" target="_blank" title="Cool Neon Green Outer Glow Pointer"><img src="https://cur.cursors-4u.net/cursor.png" border="0" alt="Cool Neon Green Outer Glow Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        body {
            font-family: 'Roboto', sans-serif;
        }
        #grid1 {
            width: 15rem;
            height: 5rem;
            @apply fixed transition-all duration-1000 bg-[#519259];
        }
        #grid2 {
            width: calc(100% - 15rem);
            height: 5rem;
            left: 15rem;
            @apply fixed transition-all duration-1000 bg-[#519259];
        }
        #grid3 {
            width: 100%;
            height: calc(100% - 5rem);
            top: 5rem;
            @apply fixed transition-all duration-1000 bg-[#d3e4cd];
        }
        .serif {
            font-family: 'Roboto Slab', serif;
        }
        ::-webkit-scrollbar {
            width: 1rem;
            height: 1rem;
        }
        ::-webkit-scrollbar-track {     
            background-color: #d3e4cd;
            border-radius: 1rem;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #519259;
            border-radius: 1rem;
        }
    </style>
</head>
<body>
    <div id="grid1">
    <h1 class="text-white text-2xl font-bold text-center mt-5"><a href="/user/dashboard">MitraJamur.Id</a></h1>
    </div>
    <div id="grid2">
        <a href="/logout" class="text-white text-xl font-bold float-right ml-5 mr-5 mt-5"> Logout</a>
        <a href="/profil" class="text-white text-xl float-right ml-5 mr-5 mt-5"> Profil</a>
        <a href="/user/partisipasi" class="text-white text-xl float-right ml-5 mr-5 mt-5"> Partisipasi</a>
        <a href="/user/pemesanan" class="text-white text-xl float-right ml-5 mr-5 mt-5"> Pemesanan</a>
        <a href="/user/workshop" class="text-white text-xl float-right ml-5 mr-5 mt-5"> Workshop</a>
        <a href="/user/produk" class="text-white text-xl float-right mr-5 mt-5"> Produk</a>
    </div>
    <div id="grid3" class="p-4">
        <div class="serif overflow-scroll max-h-[95%]">
            <div class="w-full bg-[#a3da8d]">
                <div class="grid grid-cols-3 place-items-center py-5">
                    <div class="col-span-2 ml-20">
                        <p class="ml-10 text-xl font-bold" style="font-family:Helvetica; font-size:20px;">Selamat Datang, <i>{{Auth::user()->namaUser}}</i></p><br>
                        <h1 class="ml-10 mb-7 text-4xl font-bold">MitraJamur.ID</h1>
                        <p class="ml-10 mb-4">Mitra Jamur Indonesia adalah sebuah pusat penelitian, penyediaan, dan pengelolaan jamur terpadu yang terletak di Kecamatan Gebang, Kota Jember, Jawa Timur</p><br>
                    </div>
                    <div>
                        <center>
                            <a href="#"><img src="{{asset('/bahan-img/jamoer.png')}}" width="350rem"></a>
                        </center>
                    </div>
                </div>
            </div>
            @php
            use App\Models\Produk;
            use App\Models\Workshop;
            $produk = Produk::all();
            $workshop = Workshop::all();
            @endphp
            <h1 class="serif text-center text-2xl font-bold mt-10 mb-2">PRODUCT</h1>
            <h2 class="serif text-center text-l mb-5">What We Sell</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 justify-items-center ">
                @foreach($produk as $prd)
                <div class="relative mb-5 bg-[#f4f4f4] p-2 w-[15rem] text-center">
                    <img src="{{ asset('foto-produk/'.$prd->gambarProduk) }}" class="h-[11rem] w-full">
                    <p class="font-bold my-2 ">{{$prd->namaProduk}}</p>
                    <p class="my-2 mb-3">Rp{{number_format($prd->hargaProduk)}}</p>
                    <a href="/user/produk/detail/{{$prd->id}}" class="border border-black px-3">View More</a>
                </div>
                @endforeach
            </div>
            <h1 class="serif text-center text-2xl font-bold mt-10 mb-2">WORKSHOP</h1>
            <h2 class="serif text-center text-l mb-5">More Knowledge For You</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 justify-items-center ">
                @foreach($workshop as $wsp)
                <div class="relative mb-5 bg-[#a3da8d] p-2 w-[15rem] text-center">
                    <img src="{{ asset('foto-workshop/'.$wsp->gambarWorkshop) }}" class="h-[11rem] w-full">
                    <p class="font-bold my-2 ">{{$wsp->namaWorkshop}}</p>
                    <p class="my-2 mb-3">Rp{{number_format($wsp->hargaWorkshop)}}</p>
                    <a href="/user/workshop/detail/{{$wsp->id}}" class="border border-black px-3 bg-[#04936d] text-white">View More</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>