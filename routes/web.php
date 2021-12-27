<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PesananController;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\VarianController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\JangkauanController;
use App\Http\Controllers\Admin\HomeController as AdminDashboard;
use App\Http\Controllers\User\HomeController as UserDashboard;
use App\Http\Controllers\User\ProdukController;
use App\Http\Controllers\User\HistoryController;
use App\Http\Controllers\User\KeranjangController;
use App\Http\Controllers\User\KontakController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\UserController;

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
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('/');
Route::get('/', [UserDashboard::class, 'index'])->name('/');
Route::get('produk', [ProdukController::class, 'index'])->name('produk');
Route::get('history', [HistoryController::class, 'index'])->name('history');
Route::get('keranjang', [KeranjangController::class, 'index'])->name('keranjang');
Route::get('kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');


//routing admin
Route::get('dashboard', [AdminDashboard::class, 'index'])->name('dashboard');

//routing pesanan masuk
Route::get('pesanan', [PesananController::class, 'index'])->name('pesanan');

//data-barang
Route::get('data-barang', [BarangController::class, 'index'])->name('data.barang');
Route::get('tambah-barang', [BarangController::class, 'create'])->name('tambah.barang');
Route::post('tambah-barang', [BarangController::class, 'store'])->name('tambah.barang');
Route::get('edit-barang/{id}', [BarangController::class, 'show'])->name('edit.barang');
Route::put('edit-barang/{id}', [BarangController::class, 'edit'])->name('edit.barang');
Route::get('detail-barang/{id}', [BarangController::class, 'detail'])->name('detail.barang');
Route::delete('hapus-barang/{id}', [BarangController::class, 'destroy'])->name('hapus.barang');

//varian-barang
Route::get('tambah-varian/{id}', [VarianController::class, 'create'])->name('tambah.varian');
Route::post('tambah-varian/{id}', [VarianController::class, 'store'])->name('tambah.varian');
Route::get('detail-varian/{id}', [VarianController::class, 'show'])->name('detail.varian');

//kategori-barang
Route::get('kategori', [KategoriController::class, 'index'])->name('kategori');
Route::post('kategori', [KategoriController::class, 'store'])->name('kategori');
Route::get('edit-kategori/{id}', [KategoriController::class, 'show'])->name('edit.kategori');
Route::put('edit-kategori/{id}', [KategoriController::class, 'edit'])->name('edit.kategori');
Route::delete('hapus-kategori/{id}', [KategoriController::class, 'destroy'])->name('hapus.kategori');

//jangkauan
Route::get('jangkauan', [JangkauanController::class, 'index'])->name('jangkauan');
Route::post('jangkauan', [JangkauanController::class, 'store'])->name('jangkauan');
Route::get('edit-jangkauan/{id}', [JangkauanController::class, 'show'])->name('edit.jangkauan');
Route::put('edit-jangkauan/{id}', [JangkauanController::class, 'edit'])->name('edit.jangkauan');
Route::delete('hapus-jangkauan/{id}', [JangkauanController::class, 'destroy'])->name('hapus.jangkauan');

//socialite routes
Route::get('login-dengan-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');


require __DIR__.'/auth.php';