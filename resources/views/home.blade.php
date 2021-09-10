@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center pt-5">
    <div class="col-md-10">
        <div class="">
            <input class="form-control form-control-lg" style="height:50px" type="text" placeholder="Pencarian">
            <br>
            <select class="form-control form-control-sm" style="width:150px">
                <option>Proyek Terbaru</option>
                <option>Aplikasi WEB</option>
                <option>Aplikasi Mobile</option>
                <option>Tugas Akhir</option>
                <option>Multimedia</option>
            </select>
        </div>
    </div>
</div>
<div class="row justify-content-md-center pt-5 m-2">
    <div class="col-md text-center">
        <img src="{{asset('asset/proyek.png')}}" class="item-image">
        <h4 class="item-title pt-3">Judul Proyek</h4>
        <p class="item-desc">Deskripsi singkat</p>
    </div>
    <div class="col-md text-center">
        <img src="{{asset('asset/proyek.png')}}" class="item-image">
        <h4 class="item-title pt-3">Judul Proyek</h4>
        <p class="item-desc">Deskripsi singkat</p>
    </div>
    <div class="col-md text-center">
        <img src="{{asset('asset/proyek.png')}}" class="item-image">
        <h4 class="item-title pt-3">Judul Proyek</h4>
        <p class="item-desc">Deskripsi singkat</p>
    </div>
</div>
<div class="row justify-content-md-center pt-5 m-2">
    <div class="col-md text-center">
        <img src="{{asset('asset/proyek.png')}}" class="item-image">
        <h4 class="item-title pt-3">Judul Proyek</h4>
        <p class="item-desc">Deskripsi singkat</p>
    </div>
    <div class="col-md text-center">
        <img src="{{asset('asset/proyek.png')}}" class="item-image">
        <h4 class="item-title pt-3">Judul Proyek</h4>
        <p class="item-desc">Deskripsi singkat</p>
    </div>
    <div class="col-md text-center">
        <img src="{{asset('asset/proyek.png')}}" class="item-image">
        <h4 class="item-title pt-3">Judul Proyek</h4>
        <p class="item-desc">Deskripsi singkat</p>
    </div>
</div>
@endsection