<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('pesanan-masuk', function () {
    return view('admin.pesananMasuk.index');
})->name('pesanan-masuk');

Route::get('detail-pesanan', function () {
    return view('admin.pesananMasuk.detail');
})->name('detail-pesanan');

Route::get('data-barang', function () {
    return view('admin.dataBarang.index');
})->name('data-barang');

Route::get('tambah-barang', function () {
    return view('admin.dataBarang.tambahBarang');
})->name('tambah-barang');

Route::get('tambah-varian', function () {
    return view('admin.dataBarang.tambahVarian');
})->name('tambah-varian');

Route::get('kategori', function () {
    return view('admin.kategori.index');
})->name('kategori');

Route::get('edit-kategori', function () {
    return view('admin.kategori.edit');
})->name('edit-kategori');

Route::get('jangkauan', function () {
    return view('admin.jangkauan.index');
})->name('jangkauan');

Route::get('edit-jangkauan', function () {
    return view('admin.jangkauan.edit');
})->name('edit-jangkauan');

Route::get('laporan', function () {
    return view('admin.laporan.index');
})->name('laporan');