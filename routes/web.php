<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| AUTH CONTROLLER
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

/*
|--------------------------------------------------------------------------
| ADMIN CONTROLLER
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\AlatController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\PeminjamanController;
use App\Http\Controllers\Admin\PengembalianController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| PETUGAS CONTROLLER
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Petugas\DashboardController as PetugasDashboard;
use App\Http\Controllers\Petugas\PeminjamanController as PetugasPeminjamanController;
use App\Http\Controllers\Petugas\PengembalianController as PetugasPengembalianController;
use App\Http\Controllers\Petugas\AlatController as PetugasAlatController;


/*
|--------------------------------------------------------------------------
| PEMINJAM CONTROLLER
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Peminjam\DashboardController as PeminjamDashboard;
use App\Http\Controllers\Peminjam\AlatController as PeminjamAlatController;
use App\Http\Controllers\Peminjam\PeminjamanController as PeminjamanPeminjamanController;
use App\Http\Controllers\Peminjam\RiwayatController;



/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'index'])
    ->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('login.authenticate');

Route::post('/logout', [LogoutController::class, 'logout'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function () {

        /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

        Route::get('/dashboard', [AdminDashboard::class, 'index'])
            ->name('admin.dashboard');

        /*
    |--------------------------------------------------------------------------
    | DATA ALAT
    |--------------------------------------------------------------------------
    */

        Route::resource('alat', AlatController::class);

        /*
    |--------------------------------------------------------------------------
    | KATEGORI
    |--------------------------------------------------------------------------
    */

        Route::resource('kategori', KategoriController::class);

        /*
    |--------------------------------------------------------------------------
    | PEMINJAMAN
    |--------------------------------------------------------------------------
    */

        Route::get('/peminjaman', [PeminjamanController::class, 'index'])
            ->name('admin.peminjaman.index');

        /*
    |--------------------------------------------------------------------------
    | PENGEMBALIAN
    |--------------------------------------------------------------------------
    */

        Route::get('/pengembalian', [PengembalianController::class, 'index'])
            ->name('admin.pengembalian.index');

        Route::get('/pengembalian/create', [PengembalianController::class, 'create'])
            ->name('admin.pengembalian.create');

        Route::post('/pengembalian/store', [PengembalianController::class, 'store'])
            ->name('admin.pengembalian.store');

        Route::get('/pengembalian/edit/{id}', [PengembalianController::class, 'edit'])
            ->name('admin.pengembalian.edit');

        Route::put('/pengembalian/update/{id}', [PengembalianController::class, 'update'])
            ->name('admin.pengembalian.update');

        Route::delete('/pengembalian/delete/{id}', [PengembalianController::class, 'destroy'])
            ->name('admin.pengembalian.destroy');

        /*
    |--------------------------------------------------------------------------
    | USER
    |--------------------------------------------------------------------------
    */

        Route::get('/user', [UserController::class, 'index'])
            ->name('admin.user.index');

        Route::get('/user/create', [UserController::class, 'create'])
            ->name('admin.user.create');

        Route::post('/user/store', [UserController::class, 'store'])
            ->name('admin.user.store');

        Route::get('/user/edit/{id}', [UserController::class, 'edit'])
            ->name('admin.user.edit');

        Route::put('/user/update/{id}', [UserController::class, 'update'])
            ->name('admin.user.update');

        Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])
            ->name('admin.user.destroy');

        /*
    |--------------------------------------------------------------------------
    | LAPORAN
    |--------------------------------------------------------------------------
    */

        Route::get('/laporan', function () {
            return view('admin.laporan.index');
        })->name('admin.laporan.index');
    });

/*
|--------------------------------------------------------------------------
| PETUGAS
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->prefix('petugas')
    ->group(function () {

        /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

        Route::get('/dashboard', [PetugasDashboard::class, 'index'])
            ->name('petugas.dashboard');

        /*
    |--------------------------------------------------------------------------
    | PEMINJAMAN
    |--------------------------------------------------------------------------
    */

        Route::get(
            '/peminjaman',
            [PetugasPeminjamanController::class, 'index']
        )
            ->name('petugas.peminjaman.index');

        /*
    |--------------------------------------------------------------------------
    | PENGEMBALIAN
    |--------------------------------------------------------------------------
    */

        Route::get(
            '/pengembalian',
            [PetugasPengembalianController::class, 'index']
        )
            ->name('petugas.pengembalian.index');

        /*
    /*
|--------------------------------------------------------------------------
| DATA ALAT
|--------------------------------------------------------------------------
*/

        Route::get('/alat', [PetugasAlatController::class, 'index'])
            ->name('petugas.alat.index');

        Route::prefix('petugas')->name('petugas.')->group(function () {

            Route::resource('alat', AlatController::class);
        });
        /*
    |--------------------------------------------------------------------------
    | LAPORAN
    |--------------------------------------------------------------------------
    */

        Route::get('/laporan', function () {
            return view('petugas.laporan.index');
        })->name('petugas.laporan.index');
    });

/*
|--------------------------------------------------------------------------
| PEMINJAM
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
->prefix('peminjam')
->name('peminjam.')
->group(function () {

    // dashboard peminjam
    Route::get('/dashboard', [PeminjamDashboard::class, 'index'])
        ->name('dashboard');

    // list alat
    Route::get('/alat', [AlatController::class, 'index'])
        ->name('alat.index');

    // form pinjam
    Route::get('/peminjaman/create/{id}', [PeminjamanController::class, 'create'])
        ->name('peminjaman.create');

    // simpan pinjam
    Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])
        ->name('peminjaman.store');
});

    Route::get('/riwayat', [RiwayatController::class, 'index']);
