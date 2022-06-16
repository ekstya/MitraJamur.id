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
    <h1 class="text-white text-2xl font-bold text-center mt-5"><a href="/user/dashboard">MitraJamur.Id</a></h1>
    </div>
    <div id="grid2">
        <a href="/logout" class="text-white text-xl font-bold float-right ml-5 mr-5 mt-5"> Logout</a>
        <a href="/profil" class="text-white text-xl float-right ml-5 mr-5 mt-5"> Profil</a>
        <a href="/user/partisipasi" class="text-black text-xl float-right ml-5 mr-5 mt-5"> Partisipasi</a>
        <a href="/user/pemesanan" class="text-white text-xl float-right ml-5 mr-5 mt-5"> Pemesanan</a>
        <a href="/user/workshop" class="text-white text-xl float-right ml-5 mr-5 mt-5"> Workshop</a>
        <a href="/user/produk" class="text-white text-xl float-right mr-5 mt-5"> Produk</a>
    </div>
    <div id="grid3" class="p-4">
        <div class="serif overflow-scroll max-h-[95%]">
            <div class="grid grid-cols-1 gap-4 mt-3 mb-10">
                <div class="text-center text-3xl text-black font-bold p-2">
                    <h1>Partisipasi Saya</h1>
                </div>
            </div>
            <div class="serif mt-10 overflow-scroll max-h-[80%]">
                <div class="container text-center justify-items-center ml-20 mr-20">
                    <div class="row">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-4 justify-items-center ">
                            <table class="table-auto w-full bg-white">
                                <thead>
                                    <tr class="border-b-black border border-transparent">
                                        <th class="py-3">No</th>
                                        <th class="py-3">Workshop</th>
                                        <th class="py-3">Tanggal Workshop</th>
                                        <th class="py-3">Tanggal Pendaftaran</th>
                                        <th class="py-3">Harga</th>
                                        <th class="py-3">Status</th>
                                        <th class="py-3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no=1;
                                    @endphp
                                    @foreach($data as $dt)
                                    <tr class="border-b-black border border-transparent">
                                        <td class="text-center py-3">{{$no++}}</td>
                                        <td class="text-center py-3">{{$dt->namaWorkshop}}</td>
                                        <td class="text-center py-3">{{$dt->waktuWorkshop}}</td>
                                        <td class="text-center py-3">{{$dt->tanggalPendaftaran}}</td>
                                        <td class="text-center py-3">Rp.{{number_format($dt->hargaWorkshop, 2, ',', '.')}}</td>
                                        <td class="text-center py-3">{{$dt->statusPembayaran}}</td>
                                        <td class="text-center py-3">
                                            @if($dt->statusPembayaran == 'BelumBayar')
                                            <a href="/user/partisipasi/konfirmasi/{{$dt->pendaftaran_workshop_id}}" class="bg-[#DEDA08] px-2 py-1 rounded-lg text-black text-sm font-medium"><i class="fa-solid fa-file"></i> Konfirmasi</a>
                                            @endif
                                            @if($dt->statusPembayaran == 'MenungguKonfirmasi')
                                            <p>Mohon Tunggu...</p>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>