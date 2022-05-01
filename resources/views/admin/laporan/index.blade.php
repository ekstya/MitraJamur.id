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
            width: 15rem;
            height: calc(100% - 5rem);
            top: 5rem;
            @apply fixed transition-all duration-1000 bg-[#519259];
        }
        #grid4 {
            width: calc(100% - 15rem);
            height: calc(100% - 5rem);
            left: 15rem;
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
        <h1 class="text-white text-2xl font-medium text-center mt-5">MitraJamur.Id</h1>
    </div>
    <div id="grid2">
        <a href="/profil" class="text-white text-2xl float-right mr-5 mt-5"><i class="fa-regular fa-user text-black text-3xl"></i> Profil</a>
    </div>
    <div id="grid3">
        <ul class="mt-5">
            <a href="/admin/dashboard">
                <li class="px-5 py-2 text-xl text-white"><i class="fa-solid fa-house text-black absolute left-5"></i><span class="ml-10">Home</span></li>
            </a>
            <a href="/admin/produk">
                <li class="px-5 py-2 text-xl text-white"><i class="fa-solid fa-bag-shopping text-black absolute left-5"></i><span class="ml-10">Product</span></li>
            </a>
            <a href="/admin/workshop">
                <li class="px-5 py-2 text-xl text-white"><i class="fa-solid fa-book-open text-black absolute left-5"></i><span class="ml-10">Workshop</span></li>
            </a>
            <a href="/admin/pemesanan">
                <li class="px-5 py-2 text-xl text-white"><i class="fa-solid fa-cart-shopping text-black absolute left-5"></i><span class="ml-10">Pemesanan</span></li>
            </a>
            <a href="/admin/laporan">
                <li class="px-5 py-2 text-xl text-white"><i class="fa-solid fa-file text-black absolute left-5"></i><span class="ml-10">Laporan</span></li>
            </a>
            <a href="/admin/jadwal_panen">
                <li class="px-5 py-2 text-xl text-white"><i class="fa-solid fa-calendar text-black absolute left-5"></i><span class="ml-10">Jadwal Panen</span></li>
            </a>
            <a href="/admin/customer">
                <li class="px-5 py-2 text-xl text-white"><i class="fa-solid fa-user text-black absolute left-5"></i><span class="ml-10">Customer</span></li>
            </a>
        </ul>
        <ul class="absolute bottom-0">
            <a href="/logout">
                <li class="px-5 py-2 text-xl text-white"><span class="ml-10">Logout <i class="fa-solid fa-angle-right"></i></span></li>
            </a>
        </ul>
    </div>
    <div id="grid4" class="p-4">
        <br><br><br><br>
        <div class="serif mt-10 overflow-scroll max-h-[80%]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 justify-items-center mt-10 mb-10 ">
                <div class="pr-3 pb-3 col-span-3">
                    <a href="/admin/laporan/pembelian" class="bg-[#05548C] px-16 py-8 rounded-lg text-white text-lg font-medium"><i class="fa-solid fa-shopping-cart"></i> Laporan Pembelian Produk</a>
                </div>
                <br><br><br><br>
                <div class="pr-3 pb-3 col-span-3">
                    <a href="/admin/laporan/pendaftaran" class="bg-[#E6930B] px-10 py-8 rounded-lg text-white text-lg font-medium"><i class="fa-solid fa-file"></i> Laporan Pendaftaran Workshop</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>