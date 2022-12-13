<?php

use App\Http\Controllers\MenuAdminController;
use App\Http\Controllers\LogUserController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MenuWebController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\HomeDashboardController;
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


Route::get('', function () {
return view('beranda');   
})
->middleware(['auth']);

Route::get('/dashboard', function () {
return view('dashboard');   
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';







Route::resource('menu',MenuWebController::class)->middleware(['auth']);
Route::resource('HomeDashboard',HomeDashboardController::class)->middleware(['auth']);
Route::resource('beranda',BerandaController::class)->middleware(['auth']);
Route::resource('riwayat',RiwayatController::class)->middleware(['auth']);
// Route::resource('payment',PaymentController::class)->middleware(['auth']);
Route::resource('cart',CartController::class)->middleware(['auth']);
Route::resource('home',MenuAdminController::class)->middleware(['auth']);
Route::resource('category',categoryController::class)->middleware(['auth']);
Route::resource('log',logUserController::class)->middleware(['auth']);

// Route::post('log',[\App\Http\Controller\CartController::class, 'store'])->name(name: 'cart.store');