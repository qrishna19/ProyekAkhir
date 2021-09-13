<?php

namespace App\Http\Controllers;

use App\Models\AnggotaProyek;
use Illuminate\Http\Request;
use App\Models\Proyek as ProyekModel;
use App\Models\Kategori;
use App\Models\User;

class HomeController extends Controller
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
        $proyek = ProyekModel::orderBy('created_at', 'DESC')->get();
        return view('home', [
            'proyek' => $proyek,
            'order' => "1",
            'q' => "",
        ]);
    }

    public function order(Request $request)
    {
        $order = $request->order;
        $proyek = ProyekModel::where("judul_proyek","LIKE", "%".$request->q."%")->orderBy('created_at', 'DESC')->get();
        if($order == 2)
            $proyek = ProyekModel::where("judul_proyek","LIKE", "%".$request->q."%")->orderBy('judul_proyek', 'ASC')->get();
        return view('home', [
            'proyek' => $proyek,
            'order' => $order,
            'q' => $request->q,
        ]);
    }

    public function tampil_proyek($id)
    {
        //SELECT * FROM `anggota_proyek` JOIN users ON anggota_proyek.id_user = users.id WHERE id_proyek=9
        $proyek = ProyekModel::find($id);
        $dosen = User::find($proyek->id_dosen);
        $kategori = Kategori::find($proyek->id_kategori);
        $anggotas = AnggotaProyek::join('users', 'anggota_proyek.id_user','=','users.id')->where('id_proyek', $proyek->id)->get();
        return view('tampil_proyek', [
            'proyek' => $proyek,
            'kategori' => $kategori->nama_kategori,
            'dosen' => $dosen->name,
            'anggotas' => $anggotas
        ]);
    }
}
