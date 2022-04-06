@include('layout.dash')

<div class="main-page" id="content" style="margin:20px;">
<div class="container-fluid">
        <div class="button-row">
            <a href="/addWorkshop" class=" btn btn-success btn-md mt-2 mb-5" role="button" style="border-radius: 1rem;" ><i class="bi bi-plus" aria-hidden="true"></i><b>  Tambah</b></a>
        </div>  
    </div>
<div class="row justify-content-center" style="margin: 20px;">
     <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">

         <div class="col mb-3">
            <div class="card h-100" style="background-color: #A3DA8D;">
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Hot Topic</div>
                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="jamur segar" />
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h5 class="fw-bolder">nama workshop</h5>
                                Rp19.000
                        </div>
                    </div>
                        <div class="card-footer p-4 pt-0 border-top-0" style="background-color: #A3DA8D; margin:auto;">
                            <li class="d-inline p-3">
                                <a class="btn btn-outline-dark mt-auto" href="/editWorkshop" style="margin-right: 5px;">Edit</a>
                                <a class="btn btn-outline-dark mt-auto" href="/participant">Participant</a>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="col mb-3">
                    <div class="card h-100" style="background-color: #A3DA8D;">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="kaldu jamur" />
                        <div class="card-body p-4">
                            <div class="text-center">                              
                                <h5 class="fw-bolder">Nama workshop</h5>                               
                                Rp20.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0" style="background-color: #A3DA8D; margin:auto;">
                            <li class="d-inline p-3" style="margin: auto;">
                                <a class="btn btn-outline-dark mt-auto" href="/editWorkshop" style="margin-right: 5px;">Edit</a>
                                <a class="btn btn-outline-dark mt-auto" href="/participant">Participant</a>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="col mb-3">
                    <div class="card h-100" style="background-color: #A3DA8D;">
                        <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Fresh Item</div> -->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="sosis jamur" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">nama workshop</h5>
                                Rp25.000
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0" style="background-color: #A3DA8D; margin:auto;">
                            <li class="d-inline p-3" style="margin: auto;">
                                <a class="btn btn-outline-dark mt-auto" href="/editWorkshop" style="margin-right: 5px;">Edit</a>
                                <a class="btn btn-outline-dark mt-auto" href="/participant">Participant</a>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="col mb-3">
                    <div class="card h-100" style="background-color: #A3DA8D;">
                        <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Fresh Item</div> -->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="kebab jamur" />
                            <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">nama workshop</h5>
                                Rp30.000
                            </div>
                        </div>
                    <div class="card-footer p-4 pt-0 border-top-0" style="background-color: #A3DA8D; margin:auto;">
                        <li class="d-inline p-3" style="margin: auto;">
                            <a class="btn btn-outline-dark mt-auto" href="/editWorkshop" style="margin-right: 5px;">Edit</a>
                            <a class="btn btn-outline-dark mt-auto" href="/editWorkshop">Participant</a>
                        </li>
                    </div>    
                </div>
            </div>
        </div>
    </div>        
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>