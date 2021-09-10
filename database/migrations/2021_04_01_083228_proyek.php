<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_proyek');
            $table->string('gambar_proyek')->nullable();
            $table->string('deskripsi_proyek')->nullable();
            $table->string('jenis_proyek')->nullable();
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_dosen')->nullable();
            $table->unsignedBigInteger('id_anggota')->nullable();
            $table->string('link_proyek')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('cascade');
            $table->foreign('id_dosen')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_anggota')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyek');
    }
}
