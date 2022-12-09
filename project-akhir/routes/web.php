<?php

use App\Http\Controllers\MenuAdminController;
use App\Http\Controllers\logController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ProfileController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/beranda', function () {
    return view('beranda' ,[
        "title" => "Beranda"
    ]);
});
Route::get('/menu', function () {
    return view('menu' ,[
        "title" => "menu"
    ]);
});
Route::get('/cart', function () {
    return view('cart' ,[
        "title" => "cart"
    ]);
});
Route::get('/cart/payment', function () {
    return view('payment' ,[
        "title" => "payment"
    ]);
});
Route::get('/riwayat', function () {
    return view('RiwayatTransaksi' ,[
        "title" => "Riwayat"
    ]);
});
// Route::get('/log', function () {
//     return view('log' ,[
//         "title" => "log"
//     ]);
// });



Route::resource('home',MenuAdminController::class);
Route::resource('category',categoryController::class);
Route::resource('log',logController::class);