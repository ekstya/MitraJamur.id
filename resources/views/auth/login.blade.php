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
            @apply bg-[#d3e4cd];
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
        <h1 class="text-white text-2xl font-bold text-center ml-10 mt-5"><a href="/">MitraJamur.Id</a></h1>
    </div>
    <div id="grid2">
    </div>
    <div class="rounded-lg p-5 w-[30rem] serif bg-[#a3da8d] fixed left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2">
        <center>
            <i class="fa-regular fa-user text-5xl mt-3 mb-1"></i>
            <h1 class="text-xl font-bold">Log in</h1>
            <form action="post_login" method="post" class="mt-5 w-[75%]">
				@csrf
                <input type="text" placeholder="Username" class="bg-[#e6dbdb] px-5 py-2 rounded-lg mt-5 mb-3 w-full" name="username">
                <input type="password" placeholder="Password" class="bg-[#e6dbdb] px-5 py-2 rounded-lg mb-4 w-full" name="password">
                <br>
                <button class="bg-[#04936d] text-white px-4 py-2 my-4 mb-5">Login</button>
            </form>
			<span class="text-center text-l">Didn't have any account? <a href="/register"><u>Register Here!</u></a></span>
        </center>
    </div>
</body>
</html>