<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PenggunaController;
use App\Http\Controllers\backend\PropertiController;
use App\Http\Controllers\backend\TransaksiController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::get('/', function () {
    return view('frontend.template');
});




Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', function () {
        return view('admin');
    })->name('dashboard');
    Route::prefix('dashboard/master')->group(function (){
        //route pengguna
        Route::resource('pengguna', backend\PenggunaController::class, ['names' =>[
            'index' => 'pengguna'
        ]]);
        //route properti
        Route::resource('properti', backend\PropertiController::class, ['names' =>[
            'index' => 'properti'
        ]]);
        //route transaksi
        Route::resource('transaksi', backend\TransaksiController::class, ['names' =>[
            'index' => 'transaksi'
        ]]);

    });
});

require __DIR__.'/auth.php';
