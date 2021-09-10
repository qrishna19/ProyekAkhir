<?php

namespace App\Http\Controllers;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use App\Models\Proyek as ProyekModel;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ProyekController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategori = Kategori::get();
        $pembimbing = User::where("tipe_user", "dosen")->get();
        $anggota = User::where("tipe_user", "mahasiswa")->get();
        $proyek = ProyekModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.proyek', [
            'proyek' => $proyek,
            'kategori' => $kategori,
            'pembimbing' => $pembimbing,
            'anggota' => $anggota
        ]);
    }

    public function store(Request $request){
        // dd($request);
        $request->validate([
            'gambar_proyek' => 'image|required',
            'judul_proyek' => 'required',
            'deskripsi_proyek' => 'required',
            'id_kategori' => 'required',
            'link_proyek' => 'required',
            'id_dosen' => 'required',
            'id_anggota' => 'required',
            'jenis_proyek' => 'required',
        ]);

        $imageName = $request->judul_proyek . '.' . $request->gambar_proyek->extension();
        $request->gambar_proyek->move(public_path('images'), $imageName);

        // $mitra = Mitra::where('user_id', Auth::id())->first();
        // try {
            ProyekModel::create([
            'gambar_proyek' => $imageName,
            'judul_proyek' => $request->judul_proyek,
            'deskripsi_proyek' => $request->deskripsi_proyek,
            'id_kategori' => $request->id_kategori,
            'id_dosen' => $request->id_dosen,
            'id_anggota' => $request->id_anggota,
            'jenis_proyek' => $request->jenis_proyek,
            'link_proyek' => $request->link_proyek,
            ]);
            return redirect()->route('proyek');//->with('success','Lowongan berhasil dibuat!');
        // } catch (\Exception $e) {
        //     return redirect()->back();//->with('error','Lowongan gagal dibuat!');
        // }
    }
}