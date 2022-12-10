<?php

use App\Http\Controllers\MenuAdminController;
use App\Http\Controllers\LogUserController;
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

Route::get('/', function () {
    return view('beranda' ,[
        "title" => "beranda"
    ]);
})->middleware(['auth']);;
Route::get('/beranda', function () {
    return view('beranda' ,[
        "title" => "Beranda"
    ]);
})->middleware(['auth']);;
Route::get('/menu', function () {
    return view('menu' ,[
        "title" => "menu"
    ]);
})->middleware(['auth']);;
Route::get('/cart', function () {
    return view('cart' ,[
        "title" => "cart"
    ]);
})->middleware(['auth']);;
Route::get('/cart/payment', function () {
    return view('payment' ,[
        "title" => "payment"
    ]);
})->middleware(['auth']);;
Route::get('/riwayat', function () {
    return view('RiwayatTransaksi' ,[
        "title" => "Riwayat"
    ]);
})->middleware(['auth']);;
// Route::get('/log', function () {
//     return view('log' ,[
//         "title" => "log"
//     ]);
// });



Route::resource('home',MenuAdminController::class)->middleware(['auth']);
Route::resource('category',categoryController::class)->middleware(['auth']);
Route::resource('log',logUserController::class)->middleware(['auth']);