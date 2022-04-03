@include('partials.head')

<body style="background-color: #D3E4CD; font-family:BR Hendrix Semi Bold;">
@include('partials.top');

<section class="vh-100" id="register">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 2rem; background-color:#91C788">

          <div class="card-body p-5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="50" fill="#064635" class="bi bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/></svg>
            <h1 class="mb-5 mt-2" style="color: #064635;"><b>Register Account</b></h1>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="firstname" class="form-control form-control-lg" placeholder="First Name" required/>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="lastname" class="form-control form-control-lg" placeholder="Last Name" required/>
                    </div>
                </div>
              </div>

              <div class="form-outline mb-4">
                <input type="text" id="typeUsername" class="form-control form-control-lg" placeholder="Username" required/>
              </div>

              <div class="form-outline mb-4 mt-2">
                <input type="password" id="typePassword" class="form-control form-control-lg" placeholder="Password" required/>
              </div>

              <a href="/login" class="btn btn-success btn-outline-light btn-lg btn-block mt-4 mb-5" type="submit">Register</a>
            <h5>Already have an account? <span class="log"><a href="/login">Sign In!</a></span></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  
</body>
</html>