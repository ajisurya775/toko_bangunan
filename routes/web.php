<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PesananController;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\VarianController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\JangkauanController;
use App\Http\Controllers\Admin\LaporanController;
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

Route::get('/', [UserDashboard::class, 'index'])->name('/');
Route::get('produk', [ProdukController::class, 'index'])->name('produk');
Route::get('kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('kontak',[KontakController::class, 'create'])->name('kontak');
Route::get('detail/{id}', [UserDashboard::class, 'detail'])->name('detail');
Route::get('varian-barang/{id}', [UserDashboard::class, 'varian'])->name('varian');
Route::get('produk-bahan-bangunan', [ProdukController::class, 'bahan'])->name('bahan');
Route::get('produk-alat-bangunan', [ProdukController::class, 'alat'])->name('alat');
Route::get('produk-kelistrikan-bangunan', [ProdukController::class, 'listrik'])->name('listrik');

//socialite routes
Route::get('login-dengan-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::middleware(['auth'])->group(function () {

    //routing user
    Route::get('keranjang', [KeranjangController::class, 'index'])->name('keranjang')->middleware('ensureUserRole:user');

    //route histori belanja
    Route::get('history', [HistoryController::class, 'index'])->name('history')->middleware('ensureUserRole:user');
    
    //routing checkout
    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout')->middleware('ensureUserRole:user');
    Route::post('checkout-aksi', [CheckoutController::class, 'proses'])->name('checkout.aksi')->middleware('ensureUserRole:user');
    
    //routing keranjang
    Route::post('barang-aksi/{id}', [UserDashboard::class, 'create'])->name('barang.aksi')->middleware('ensureUserRole:user');
    Route::post('varian-aksi/{id}', [UserDashboard::class, 'vcreate'])->name('varian.aksi')->middleware('ensureUserRole:user');
    route::get('keranjang-hapus/{id}', [KeranjangController::class, 'destroy'])->name('keranjang.hapus')->middleware('ensureUserRole:user');
    
    
    //routing admin
    Route::get('dashboard', [AdminDashboard::class, 'index'])->name('dashboard')->middleware('ensureUserRole:admin');
    
    //routing pesanan masuk
    Route::get('pesanan', [PesananController::class, 'index'])->name('pesanan')->middleware('ensureUserRole:admin');
    Route::get('detail-pesanan/{invoice}', [PesananController::class, 'create'])->name('detail.pesanan')->middleware('ensureUserRole:admin');
    Route::post('terima-pesanan/{id}', [PesananController::class, 'edit'])->name('terima.pesanan')->middleware('ensureUserRole:admin');
    Route::post('tolak-pesanan/{id}', [PesananController::class, 'update'])->name('tolak.pesanan')->middleware('ensureUserRole:admin');
    Route::get('cetak-pesanan/{invoice}', [PesananController::class, 'cetak'])->name('cetak.pesanan');
    //data-barang
    Route::get('data-barang', [BarangController::class, 'index'])->name('data.barang')->middleware('ensureUserRole:admin');
    Route::get('tambah-barang', [BarangController::class, 'create'])->name('tambah.barang')->middleware('ensureUserRole:admin');
    Route::post('tambah-barang', [BarangController::class, 'store'])->name('tambah.barang')->middleware('ensureUserRole:admin');
    Route::get('edit-barang/{id}', [BarangController::class, 'show'])->name('edit.barang')->middleware('ensureUserRole:admin');
    Route::put('edit-barang/{id}', [BarangController::class, 'edit'])->name('edit.barang')->middleware('ensureUserRole:admin');
    Route::get('detail-barang/{id}', [BarangController::class, 'detail'])->name('detail.barang')->middleware('ensureUserRole:admin');
    Route::delete('hapus-barang/{id}', [BarangController::class, 'destroy'])->name('hapus.barang')->middleware('ensureUserRole:admin');
    
    //varian-barang
    Route::get('tambah-varian/{id}', [VarianController::class, 'create'])->name('tambah.varian')->middleware('ensureUserRole:admin');
    Route::post('tambah-varian/{id}', [VarianController::class, 'store'])->name('tambah.varian')->middleware('ensureUserRole:admin');
    Route::get('detail-varian/{id}', [VarianController::class, 'show'])->name('detail.varian')->middleware('ensureUserRole:admin');
    Route::get('edit-varian/{id}', [VarianController::class, 'edit'])->name('edit.varian')->middleware('ensureUserRole:admin');
    Route::put('edit-varian/{id}', [VarianController::class, 'update'])->name('edit.varian')->middleware('ensureUserRole:admin');
    Route::delete('hapus-varian/{id}', [VarianController::class, 'destroy'])->name('hapus.varian')->middleware('ensureUserRole:admin');
    
    //kategori-barang
    Route::get('kategori', [KategoriController::class, 'index'])->name('kategori')->middleware('ensureUserRole:admin');
    Route::post('kategori', [KategoriController::class, 'store'])->name('kategori')->middleware('ensureUserRole:admin');
    Route::get('edit-kategori/{id}', [KategoriController::class, 'show'])->name('edit.kategori')->middleware('ensureUserRole:admin');
    Route::put('edit-kategori/{id}', [KategoriController::class, 'edit'])->name('edit.kategori')->middleware('ensureUserRole:admin');
    Route::delete('hapus-kategori/{id}', [KategoriController::class, 'destroy'])->name('hapus.kategori')->middleware('ensureUserRole:admin');
    
    //jangkauan
    Route::get('jangkauan', [JangkauanController::class, 'index'])->name('jangkauan')->middleware('ensureUserRole:admin');
    Route::post('jangkauan', [JangkauanController::class, 'store'])->name('jangkauan')->middleware('ensureUserRole:admin');
    Route::get('edit-jangkauan/{id}', [JangkauanController::class, 'show'])->name('edit.jangkauan')->middleware('ensureUserRole:admin');
    Route::put('edit-jangkauan/{id}', [JangkauanController::class, 'edit'])->name('edit.jangkauan')->middleware('ensureUserRole:admin');
    Route::delete('hapus-jangkauan/{id}', [JangkauanController::class, 'destroy'])->name('hapus.jangkauan')->middleware('ensureUserRole:admin');

    //laporan
    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan')->middleware('ensureUserRole:admin');
    Route::get('laporan-cetak', [LaporanController::class, 'cetakLaporan'])->name('cetak')->middleware('ensureUserRole:admin');

});


require __DIR__.'/auth.php';