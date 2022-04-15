@include('partials.head')
<body style="background-color: #D3E4CD; font-family:BR Hendrix Semi Bold;">
    @include('partials.top');
    <section class="vh-100" id="register">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-75">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 2rem; background-color:#91C788">
                        <div class="card-body p-5 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="50" fill="#064635"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                            <h1 class="mb-5 mt-2" style="color: #064635;"><b>Register Account</b></h1>
                            <form action="{{ route('AuthRegister') }}" method="post">
                                <div class="form-outline mb-4">
                                    <input type="text" id="name" name="name" value="{{ Session::get('vName') }}"
                                        class="form-control form-control-lg" placeholder="Full Name" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" name="email" value="{{ Session::get('vEmail') }}"
                                        class="form-control form-control-lg" placeholder="Email" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" id="phone" name="phone" value="{{ Session::get('vPhone') }}"
                                        class="form-control form-control-lg" placeholder="Phone Number" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" id="username" name="username" value="{{ Session::get('vUsername') }}"
                                        class="form-control form-control-lg" placeholder="Username" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="password1" name="password1" value="{{ Session::get('vPassword1') }}" class="form-control form-control-lg"
                                        placeholder="Password" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="password2" name="password2" value="{{ Session::get('vPassword2') }}" class="form-control form-control-lg"
                                        placeholder="Confirm Password" required>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-lg" id="role" name="role">
                                        <option value="Customer" selected>Customer</option>
                                    </select>
                                </div>
                                <p style="font-weight: bold; color: red;">{{ Session::get('alertFailed') }}</p>
                                <p style="font-weight: bold; color: green;">{{ Session::get('alertSuccess') }}</p>
                                <button type="submit"
                                    class="btn btn-success btn-outline-light btn-lg btn-block mt-4 mb-5">Register</button>
                            </form>
                            <h5>Already have an account? <span class="log"><a href="{{ route('Login') }}">Sign In!</a></span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>