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
            <div class="serif mt-10 overflow-scroll max-h-[80%]">
                <div class="container">
                    <div class="row">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-4 justify-items-left ">
                            <form action="/profil/{{$data->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="grid grid-cols-1 gap-4 bg-[#519259]">
                                    <div class="text-center text-xl text-white font-medium p-3">
                                        <h1>Detail Data Profil</h1>
                                    </div>
                                </div>
                                <div class="serif grid grid-cols-4 gap-4 bg-white">
                                    <div class="pl-3 pt-3">
                                        Username<span class="text-red-600">*</span>
                                    </div>
                                    <div class="pr-3 pt-2 col-span-3">
                                        <input type="text" class="border w-full border-black rounded-lg p-1" name="username" value="{{$data->username}}" required>
                                    </div>
                                    <div class="pl-3 pt-3">
                                        Nama Lengkap<span class="text-red-600">*</span>
                                    </div>
                                    <div class="pr-3 pt-2 col-span-3">
                                        <input type="text" class="border w-full border-black rounded-lg p-1" name="namaUser" value="{{$data->namaUser}}" required>
                                    </div>
                                    <div class="pl-3 pt-3">
                                        Nomor HP<span class="text-red-600">*</span>
                                    </div>
                                    <div class="pr-3 pt-2 pb--2 col-span-3">
                                        <input type="text" class="border w-full border-black rounded-lg p-1" name="noHp" value="{{$data->noHp}}" required>
                                    </div>
                                    <div class="pl-3 pt-3">
                                        Email<span class="text-red-600">*</span>
                                    </div>
                                    <div class="pr-3 pt-2 pb--2 col-span-3">
                                        <input type="text" class="border w-full border-black rounded-lg p-1" name="email" value="{{$data->email}}" required>
                                    </div>
                                    <div class="pl-3 pt-3">
                                        Desa
                                    </div>
                                    <div class="pr-3 pt-2 pb--2 col-span-3">
                                        <select class="border w-full border-black rounded-lg p-1" name="desa" id="">
                                            @if ($data->desa_id == null)
                                                <option value="">Pilih Desa</option>
                                            @else
                                                @foreach ($desa as $item)
                                                    @if ($item->id == $data->desa_id)
                                                        <option value="{{ $item->id }}">{{ $item->namaDesa }}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                            
                                            @foreach ($desa as $item)
                                                @if ($item->id != $data->desa_id)
                                                    <option value="{{ $item->id }}">{{ $item->namaDesa }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($data->desa_id == null)
                                    @else
                                        @foreach ($desa as $item)
                                            @if ($item->id == $data->desa_id)
                                                <div class="pl-3 pt-3">
                                                    Kecamatan
                                                </div>
                                                <div class="pr-3 pt-2 col-span-3">
                                                    <input type="text" class="border w-full border-black rounded-lg p-1" value="{{$item->namaKecamatan}}" disabled>
                                                </div>
                                                <div class="pl-3 pt-3">
                                                    Kabupaten
                                                </div>
                                                <div class="pr-3 pt-2 col-span-3">
                                                    <input type="text" class="border w-full border-black rounded-lg p-1" value="{{$item->namaKabupaten}}" disabled>
                                                </div>
                                                <div class="pl-3 pt-3">
                                                    Provinsi
                                                </div>
                                                <div class="pr-3 pt-2 col-span-3">
                                                    <input type="text" class="border w-full border-black rounded-lg p-1" value="{{$item->namaProvinsi}}" disabled>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                    <div></div>
                                    <div class="pr-3 pb-3 col-span-3">
                                        <button type="submit" class="bg-[#04936d] px-2 py-1 rounded-lg text-white text-lg font-medium"><i class="fa-solid fa-paper-plane"></i> Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>