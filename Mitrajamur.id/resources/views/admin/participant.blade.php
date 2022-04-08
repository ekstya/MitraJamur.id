@include('layout.dash')

<div class="main-page" id="content" style="margin:20px;">
<div class="container-fluid">
    <div class="button-row" >
        <a href="/workshop" class="btn btn-outline-success btn-md mt-2 mb-5"  role="button" style="border-radius: 1rem;" ><i class="bi bi-arrow-left-circle-fill" aria-hidden="true"></i><b>  Back</b></a>
    </div>
</div>

<div class="container mb-5" style="margin: auto;">
    <h2 class="judul text-center"><b>Participant</b></h2>
    <h5 class="judul2 text-center">Judul workshopnya lalalalal</h5>
</div>
<div class="container mt-1" style="margin: auto;">
    <table class="table caption-top">
        <!-- <caption>List of users</caption> -->
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">No.Hp</th>
            <th scope="col">Status Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>2020@jamor.id</td>
            <td>081118765021</td>
            <td><div class="input-group mb-1">
                <select class="form-select form-select-lg" id="inputGroupSelect01">
                <option selected>Choose</option>
                <option value="1">Belum Dibayar</option>
                <option value="2">Belum Tervalidasi</option>
                <option value="3">Telah Tervalidasi</option>
                </select>
            </div></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>2021@jamor.id</td>
            <td>081118765021</td>
            <td><div class="input-group mb-1">
                <select class="form-select form-select-lg" id="inputGroupSelect01">
                <option selected>Choose</option>
                <option value="1">Belum Dibayar</option>
                <option value="2">Belum Tervalidasi</option>
                <option value="3">Telah Tervalidasi</option>
                </select>
            </div></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>2022@jamor.id</td>
            <td>081118765021</td>
            <td><div class="input-group mb-1">
                <select class="form-select form-select-lg" id="inputGroupSelect01">
                <option selected>Choose</option>
                <option value="1">Belum Dibayar</option>
                <option value="2">Belum Tervalidasi</option>
                <option value="3">Telah Tervalidasi</option>
                </select>
            </div></td>
            </tr>
        </tbody>
    </table>
    </div>
</div>