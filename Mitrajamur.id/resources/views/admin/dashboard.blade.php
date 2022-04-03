@include('partials.head')

<body class="sb-nav-fixed">
    <nav class="navbar navbar-expand-lg navbar-dark shadow sticky-top " style="background-color: #519259;">
        <div class="container-fluid ">
            <a class="navbar-brand ps-5" href="/admin" style="font-size:20px;">MitraJamur.id</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="nav-r gx-6 " id="navbarNav">
            <ul class="nav justify-content-end nav-pills nav-justified">
                <li class="nav-item dropdown" style="padding-right: 15px;">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="white" class="bi bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/></svg></span>
                    <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    @include('partials.sidenav')
</body>
