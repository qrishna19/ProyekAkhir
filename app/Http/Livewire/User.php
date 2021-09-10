<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Proyek as ProyekModel;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class User extends Component
{
    use WithFileUploads;

    public $judul_proyek,$gambar_proyek,$deskripsi_proyek,$jenis_proyek,$id_kategori,$id_dosen,$id_anggota,$link_proyek;

    public function render()
    {
        $kategori = Kategori::get();
        $proyek = ProyekModel::orderBy('created_at', 'DESC')->get();
        return view('livewire.user', [
            'proyek' => $proyek,
            'kategori' => $kategori
        ]);
    }

    public function previewImage(){
        $this->validate([
            'gambar_proyek' => 'image|max2048'
        ]);
    }

    public function store(){
        $this->validate([
            '$gambar_proyek' => 'image|required',
            '$judul_proyek' => 'required',
            '$deskripsi_proyek' => 'required',
            '$id_kategori' => 'required',
            '$link_proyek' => 'required',
        ]);

        $imageName = md5($this->image.microtime().'.'.$this->gambar_proyek->extension());

        Storage::putFileAs(
            'public/images',
            $this->gambar_proyek,
            $imageName
        );

        ProyekModel::create([
            'gambar_proyek' => $imageName,
            'judul_proyek' => $this->judul_proyek,
            'deskripsi_proyek' => $this->deskripsi_proyek,
            'jenis_proyek' => $this->jenis_proyek,
            'id_kategori' => $this->id_kategori,
            // 'id_dosen' => $this->id_dosen,
            // 'id_anggota' => $this->id_anggota,
            'link_proyek' => $this->link_proyek
        ]);

        session()->flash('info','Proyek berhasil dibuat');

        $this->gambar_proyek = '';
        $this->judul_proyek = '';
        $this->deskripsi_proyek = '';
        $this->jenis_proyek = '';
        $this->id_kategori = '';
        $this->id_dosen = '';
        $this->id_anggota = '';
        $this->link_proyek = '';
            
    }

}
