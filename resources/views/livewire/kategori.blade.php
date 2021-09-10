@extends("layouts.app")
@section("content")
<div>
    <div class="container">
        <div class="pt-5">
            <div class="well lead text-center pt-2 pb-2" style="background-color: white;">
                Kategori
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-md-6 text-center">
            <img src="{{asset('asset/Group 63.png')}}">
            <br>
            <h5 class="item-title pt-4">Aplikasi WEB</h4>

        </div>
        <div class="col-md-6 text-center">
            <img src="{{asset('asset/Group 64.png')}}">
            <br>
            <h5 class="item-title pt-4">Aplikasi Mobile</h4>

        </div>
    </div>
    <div class="row pt-5">
        <div class="col-md-6 text-center">
            <img src="{{asset('asset/Group 65.png')}}">
            <br>
            <h5 class="item-title pt-4">Tugas Akhir</h4>

        </div>
        <div class="col-md-6 text-center">
            <img src="{{asset('asset/Group 66.png')}}">
            <br>
            <h5 class="item-title pt-4">Multimedia</h4>

        </div>
    </div>
    @endsection
</div>