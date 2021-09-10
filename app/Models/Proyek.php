<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;

    protected $table = 'proyek';
    protected $primaryKey = 'id';
    protected $fillable = [
        'gambar_proyek','judul_proyek','deskripsi_proyek','id_kategori','id_dosen','id_anggota','jenis_proyek','link_proyek'
    ];
}
