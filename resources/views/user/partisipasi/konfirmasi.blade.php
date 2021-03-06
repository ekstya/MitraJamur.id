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
    <style type="text/css">
        * {
            cursor: url(https://cur.cursors-4u.net/cursors/cur-2/cur222.cur), auto !important;
        }
    </style><a href="https://www.cursors-4u.com/cursor/2008/12/17/cool-neon-green-outer-glow-pointer.html" target="_blank" title="Cool Neon Green Outer Glow Pointer"><img src="https://cur.cursors-4u.net/cursor.png" border="0" alt="Cool Neon Green Outer Glow Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>
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
            border-radius: 5rem;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #519259;
            border-radius: 5rem;
        }
    </style>
</head>

<body>
    <div id="grid1">
    <h1 class="text-white text-2xl font-medium text-center mt-5"><a href="/user/dashboard">MitraJamur.Id</a></h1>
    </div>
    <div id="grid2">
        <a href="/logout" class="text-white text-2xl float-right ml-5 mr-5 mt-5"> Logout</a>
        <a href="/profil" class="text-white text-2xl float-right ml-5 mr-5 mt-5"> Profil</a>
        <a href="/user/partisipasi" class="text-white text-2xl float-right ml-5 mr-5 mt-5"> Partisipasi</a>
        <a href="/user/pemesanan" class="text-white text-2xl float-right ml-5 mr-5 mt-5"> Pemesanan</a>
        <a href="/user/workshop" class="text-white text-2xl float-right ml-5 mr-5 mt-5"> Workshop</a>
        <a href="/user/produk" class="text-white text-2xl float-right mr-5 mt-5"> Produk</a>
        
    </div>
    <div id="grid3" class="p-4">
        <div class="serif overflow-scroll max-h-[95%]">
            <div class="grid grid-cols-1 gap-4 bg-[#519259] mb-4">
                <div class="text-center text-xl text-white font-medium p-3">
                    <h1>Detail workshop</h1>
                </div>
            </div>
            <a href="/user/workshop" class="bg-[#04936d] px-3 py-1 rounded-full text-white text-lg font-medium mt-2"><i class="fa-solid fa-circle-left"></i> Back</a>
            <div class="serif mt-10 overflow-scroll max-h-[80%]">
                <div class="container">
                    <div class="row">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 justify-items-left ">
                            <div class="col-md-3" align="center">
                                <img src="{{ asset('foto-workshop/'.$data->gambarWorkshop) }}" width="70%;" height="auto">
                            </div>
                            <div class="col-md-9" align="left">
                                <p class="font-bold my-2" style="font-size:36px;">{{$data->namaWorkshop}}</p>
                                <p class="my-2 text-center" style="font-size:28px; font-family:Comic Sans MS;">Rp{{number_format($data->hargaWorkshop)}}</p>
                                <p class="my-2 text-center" style="font-size:24px; font-family:Comic Sans MS;">Pelaksanaan: {{$data->waktuWorkshop}}</p>
                                <p class="my-2 text-center" style="font-size:24px; font-family:Comic Sans MS;">Tanggal Mendaftar: {{$data->tanggalPendaftaran}}</p>
                                <form action="/user/partisipasi/konfirmasi/{{$data->pendaftaran_workshop_id}}/post" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="pl-3 pt-3">
                                        Konfirmasi Pembayaran
                                    </div>
                                    <div class="pr-3 pt-2 col-span-3">
                                        <input type="hidden" value="{{date('Y-m-d')}}" name="tanggalPembayaran">
                                        <input type="hidden" name="pembayaran_workshop_id" value="{{$data->pendaftaran_workshop_id}}">
                                        <input type="file" accept="image/*" class="border w-full border-black rounded-lg p-1" name="bukti" required>
                                    </div>
                                    <div class="text-center mt-5">
                                        <button type="submit" class="bg-[#04936d] px-2 py-1 rounded-lg text-white text-xl font-medium">Konfirmasi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>