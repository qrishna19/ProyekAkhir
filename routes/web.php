<?php

use App\Http\Livewire\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Proyek2;
use App\Http\Livewire\User;
use App\Http\Livewire\Masterdata;
use App\Http\Livewire\Profil;
use App\Http\Livewire\Kategori;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');
Route::get('/tampil_proyek/{id}', [App\Http\Controllers\HomeController::class, 'tampil_proyek'])->name('tampil_proyek');
//Route::get('/proyek', Proyek2::class);
// Route::get('/user', User::class);
// Route::get('/masterdata', Masterdata::class);
// Route::get('/profil', Profil::class);
// Route::get('/kategori', Kategori::class);
// Route::get('/admin', Admin::class);
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/proyek', [App\Http\Controllers\ProyekController::class, 'index'])->name('proyek');
    Route::post('/proyek', [App\Http\Controllers\ProyekController::class, 'store'])->name('store_proyek');
    Route::get('/masterdata', [App\Http\Controllers\MasterdataController::class, 'index'])->name('masterdata');
});
Route::group(['middleware' => 'is_admin'], function () {
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
});
