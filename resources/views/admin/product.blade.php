@include('layout.dash')
<?php
function Rupiah($Angka) {
    $Angka = floatval($Angka);
    if (fmod($Angka, 1) == 0) {
        return 'Rp. '.number_format($Angka,0,',','.').',-';
    } else {
        return 'Rp. '.number_format($Angka,1,',','.').',-';
    }
}
?>
<div class="main-page" id="content" style="margin:20px;">
    <div class="container-fluid">
        <div class="button-row">
            <button type="button" class="btn btn-success btn-md mt-2 mb-5" style="border-radius: 1rem;"
                data-toggle="modal" data-target="#tambahProduk">
                <i class="bi bi-plus" aria-hidden="true"></i><b> Tambah</b>
            </button>
        </div>
        <div class="modal fade" id="tambahProduk" tabindex="-1" aria-labelledby="tambahProdukLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('TambahProduk') }}" method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahProdukLabel">Tambah Produk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="file" class="form-control" id="file" name="file"
                                    accept="image/gif,image/jpeg,image/jpg,image/png," required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Nama Produk" required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="harga" name="harga"
                                    placeholder="Harga Produk" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="2"
                                    placeholder="Deskripsi Produk"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($Produk as $dt)
                <div class="col-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card rounded">
                        {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Fresh
                            Item</div> --}}
                        <div class="overflow-hidden"
                            style="height: 10rem; background: url('{{ asset('img/produk/'.$dt->gambar_produk) }}'); background-size: cover; background-position: center;">
                        </div>
                        <div class="card-body" style="height: 8rem;">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{ $dt->nama_produk }}</h5>
                                {{ Rupiah($dt->harga_produk) }}
                            </div>
                        </div>
                        <div class="card-footer border-top-0 bg-transparent text-center">
                            <button type="button" class="btn btn-outline-dark mt-auto" data-toggle="modal"
                                data-target="#editProduk{{ $dt->id_produk }}">Edit</button>
                            <button type="button" class="btn btn-outline-danger mt-auto" data-toggle="modal"
                                data-target="#hapusProduk{{ $dt->id_produk }}">Hapus</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editProduk{{ $dt->id_produk }}" tabindex="-1" aria-labelledby="editProduk{{ $dt->id_produk }}Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('EditProduk') }}" method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editProduk{{ $dt->id_produk }}Label">Edit Produk</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" id="id" name="id" value="{{ $dt->id_produk }}" style="display: none;">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            placeholder="Nama Produk" value="{{ $dt->nama_produk }}" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="harga" name="harga"
                                            placeholder="Harga Produk" value="{{ $dt->harga_produk }}" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="2"
                                            placeholder="Deskripsi Produk">{{ $dt->deskripsi_produk }}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="hapusProduk{{ $dt->id_produk }}" tabindex="-1" aria-labelledby="hapusProduk{{ $dt->id_produk }}Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('HapusProduk') }}" method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="hapusProduk{{ $dt->id_produk }}Label">Hapus Produk</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" id="id" name="id" value="{{ $dt->id_produk }}" style="display: none;">
                                    <label for="">Yakin Hapus {{ $dt->nama_produk }} ?</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>