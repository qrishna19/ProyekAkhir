@extends("layouts.app")
@section("content")
<div style="background-color: #F2F3F5;">
    <div class="text-center">
        <h3 class="pt-5">Input Proyek</h3>
    </div>
    <div class="container pt-5 pb-5">
        <div class="card p-5">
            <div class="card-body">
                <form method="POST" action="{{route('store_proyek')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Gambar Proyek</label>
                        <div class="custom-file">
                            <!-- <input type="file" name="gambar_proyek" placeholder="Choose image" id="image"> -->
                            <input name="gambar_proyek" type="file" class="form-control" id="image">
                            <label for="image" class="custom-file-label">Choose Image</label>
                            @error('gambar_proyek') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-2 mt-2 text-center">
                            <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image" style="max-height: 250px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Judul Proyek</label>
                        <input name="judul_proyek" type="text" class="form-control">
                        @error('judul_proyek') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Proyek</label>
                        <textarea name="deskripsi_proyek" class="form-control"></textarea>
                        @error('deskripsi_proyek') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Proyek</label>
                        <input name="jenis_proyek" type="text" class="form-control">
                        @error('jenis_proyek') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="id_kategori" class="form-control">
                            @foreach($kategori as $value)
                            <option value="{{$value->id}}">{{$value->nama_kategori}}</option>
                            @endforeach
                        </select>
                        @error('judul_proyek') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Pembimbing</label>
                        <select name="id_dosen" class="form-control">
                            @foreach($pembimbing as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                        @error('id_dosen') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Anggota</label>
                        <br>
                        <div class="form-control" style="border: none;">
                        <select name="id_anggota[]" id="member" multiple>
                        @foreach($anggota as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                        @error('id_anggota') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Link Proyek</label>
                        <input name="link_proyek" type="text" class="form-control">
                        @error('link_proyek') <small class="text-danger">{{$message}}</small>@enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" value="simpan" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5">
        <div class="card p-5">
            <table id="table_data">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Judul Proyek</th>
                        <th>Deskripsi</th>
                        <th>Jenis Proyek</th>
                        <th>Kategori</th>
                        <th>Pembimbing</th>
                        <th>Anggota Proyek</th>
                        <th>Link Proyek</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach($proyek as $index=>$proyek)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$proyek->judul_proyek}}</td>
                        <td>{{$proyek->gambar_proyek}}</td>
                        <td>{{$proyek->deskripsi_proyek}}</td>
                        <td>{{$proyek->jenis_proyek}}</td>
                        <td>{{$proyek->id_kategori}}</td>
                        <td>{{$proyek->id_dosen}}</td>
                        <td>{{$proyek->id_anggota}}</td>
                        <td>{{$proyek->link_proyek}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table_data').DataTable();

            // $('#member').multiselect({
            // nonSelectedText: 'Pilih Anggota',
            // enableFiltering: true,
            // enableCaseInsensitiveFiltering: true,
            // buttonWidth:'100%'
            // });
            $('#member').select2({
    width: '100%',
    placeholder: "Select an Option",
    allowClear: true
  });
        });

        $(document).ready(function(e) {

            $('#image').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
    @endsection