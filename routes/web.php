<?php

use App\Http\Controllers\AppAkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\LayoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['guest', 'no-cache']], function () {
    Route::get('/login', [PageController::class, 'login'])->name('login')->middleware('guest');
});

Route::get('/', [PageController::class, 'loading'])->name('index');

// Routes Authentication
Route::post('/login', [AppAkunController::class, 'loginUser'])->name('login.user');
Route::get('/logout', [AppAkunController::class, 'logout'])->name('logout');

// SWITCHER
Route::get('theme-switcher/{activeTheme}', [ThemeController::class, 'switch'])->name('theme-switcher');
Route::get('layout-switcher/{activeLayout}', [LayoutController::class, 'switch'])->name('layout-switcher');

Route::group(['prefix' => 'dashboard', 'middleware' => ['usermiddleware']], function () {
    Route::controller(PageController::class)->group(function () {
        // ADMIN MASTER DATA
        //AKUN MAHASISWA
        Route::get('akun-mahasiswa/index', 'akunmahasiswaShow')->name('akunmahasiswa.index');
        Route::get('akun-mahasiswa/create', 'akunmahasiswaShowCreate')->name('akunmahasiswa.create');
        Route::get('akun-mahasiswa/edit', 'akunmahasiswaShowEdit')->name('akunmahasiswa.edit');
        Route::get('akun-mahasiswa/detail', 'akunmahasiswaDetail')->name('akunmahasiswa.detail');
        Route::post('akun-mahasiswa/proses-add', 'akunmahasiswaProsesAdd')->name('akunmahasiswa.proses-add');
        Route::post('akun-mahasiswa/proses-edit', 'akunmahasiswaProsesEdit')->name('akunmahasiswa.proses-edit');
        Route::get('akun-mahasiswa/proses-delete', 'akunmahasiswaProsesDelete')->name('akunmahasiswa.proses-delete');

        //PENDAFTARAN MAHASISWA
        Route::get('pendaftaran-mahasiswa/index', 'pendaftaranmahasiswaShow')->name('pendaftaranmahasiswa.index');
        Route::get('pendaftaran-mahasiswa/create', 'pendaftaranmahasiswaCreate')->name('pendaftaranmahasiswa.create');
        Route::get('pendaftaran-mahasiswa/edit', 'pendaftaranmahasiswaShowEdit')->name('pendaftaranmahasiswa.edit');
        Route::get('pendaftaran-mahasiswa/detail', 'pendaftaranmahasiswaDetail')->name('pendaftaranmahasiswa.detail');
        Route::post('pendaftaran-mahasiswa/proses-add', 'pendaftaranmahasiswaProsesAdd')->name('pendaftaranmahasiswa.proses-add');
        Route::post('pendaftaran-mahasiswa/proses-edit', 'pendaftaranmahasiswaProsesEdit')->name('pendaftaranmahasiswa.proses-edit');
        Route::get('pendaftaran-mahasiswa/proses-delete', 'pendaftaranmahasiswaProsesDelete')->name('pendaftaranmahasiswa.proses-delete');

        //MAHASISWA

        //Halaman Utama
        Route::get('halaman-utama/index', 'halamanutamaShow')->name('halamanutama.index');
        Route::get('halaman-pendaftaran/daftar', 'halamandaftarShow')->name('halamandaftar.index');
        Route::post('halaman-pendaftaran/proses-edit', 'halamandaftarProsesEdit')->name('halamandaftar.proses-edit');
    });
});
