<div class="pt-5" style="background-color: #f8fafc;">
    <div class="text-center">
        <img src="{{asset('asset/ellipse.png')}}" height="150" alt="logo" loading="lazy">
        <h2 class="pt-5">Mahasiswa</h2>
    </div>

    <ul class="nav nav-tabs justify-content-center pt-5" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="listproyek-tab" data-toggle="tab" href="#listproyek" role="tab" aria-controls="listproyek" aria-selected="true">
                <h3>List Proyek</h3>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tentang-tab" data-toggle="tab" href="#tentang" role="tab" aria-controls="tentang" aria-selected="false" style="color:black">
                <h3>Tentang</h3>
            </a>
        </li>
    </ul>

    <div style="background-color: #F2F3F5;">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="listproyek" role="tabpanel" aria-labelledby="listproyek-tab">
                <div class="container pt-5 pb-5">
                    <div class="card p-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{asset('asset/proyek.png')}}" height="300" width="200" alt="logo" loading="lazy">
                                </div>
                                <div class="col-md-9">
                                    <table class="table-lg">
                                        <tbody>
                                            <tr>
                                                <td>Judul Proyek</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Proyek</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kategori</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Pembimbing</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Anggota Proyek</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Link Proyek</td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tentang" role="tabpanel" aria-labelledby="tentang-tab">
                        ...
            </div>
        </div>

    </div>