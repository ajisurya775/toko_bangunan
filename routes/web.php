<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\VarianController;

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

Route::get('/', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('/');

Route::get('data-barang', [BarangController::class, 'index'])->name('data.barang');
Route::get('tambah-barang', [BarangController::class, 'create'])->name('tambah.barang');
Route::post('tambah-barang', [BarangController::class, 'store'])->name('tambah.barang');
Route::get('edit-barang/{id}', [BarangController::class, 'show'])->name('edit.barang');
Route::put('edit-barang/{id}', [BarangController::class, 'edit'])->name('edit.barang');
Route::get('detail-barang/{id}', [BarangController::class, 'detail'])->name('detail.barang');
Route::delete('hapus-barang/{id}', [BarangController::class, 'destroy'])->name('hapus.barang');

Route::get('tambah-varian/{id}', [VarianController::class, 'create'])->name('tambah.varian');
Route::post('tambah-varian/{id}', [VarianController::class, 'store'])->name('tambah.varian');
Route::get('detail-varian/{id}', [VarianController::class, 'show'])->name('detail.varian');


require __DIR__.'/auth.php';