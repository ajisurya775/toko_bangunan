<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BarangController;

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

require __DIR__.'/auth.php';