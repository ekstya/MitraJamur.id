@include('layout.dash')

<div class="main-page" id="content" style="margin:20px;">
<div class="container-fluid">
    <div class="button-row" >
        <a href="/product" class="btn btn-outline-success btn-md mt-2 mb-5"  role="button" style="border-radius: 1rem;" ><i class="bi bi-arrow-left-circle-fill" aria-hidden="true"></i><b>  Back</b></a>
    </div>
</div>

<div class="container" style="margin: auto;">
        <div class="card mt-2 mb-5">
            <div class="form-header p-3 bg-success text-black text-center"><span class="bi bi-plus" style ="font-size: 1.3rem; color:rgb(255, 255, 255);" name="edit"> Ubah Data Produk</span></div> 

            <div class="body-form">
                <form>

                    <div class="form-group row mt-3 p-3">
                        <label class="col-form-label col-sm-2 text-left">Foto Produk *</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="upload">
                        </div>
                    </div>

                    <div class="form-group row mt-1 p-3">
                        <label class="col-form-label col-sm-2 text-left">Nama Produk *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Input Nama Produk" required>
                        </div>
                    </div>

                    <div class="row mt-1 p-3">
                        <label class="col-form-label col-sm-2 text-left">Harga *</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-text">Rp</span><input type="number" class="form-control" placeholder="Input Harga" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-1 p-3">
                        <label class="col-form-label col-sm-2 text-left">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" placeholder="Input Description" row="3"></textarea>
                        </div>
                    </div>

                    <div class="row mt-1 p-3">
                        <label class="col-form-label col-sm-2 text-left">Stok *</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Input Stok" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <label class="col-form-label col-sm-2 text-left"></label>
                        <div class="col-sm-3 mt-3 mb-3 g-3 ">
                            <li class="d-inline p-3 ">
                                <button type="submit" class="btn btn-success" ><i class="bi bi-send-fill"></i><b class="text-light"> Submit</b></a>
                            </li>
                        </div>
                    </div>

                </form>
            </div>
        </div>
</div>