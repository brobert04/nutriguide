<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CustomAuth\AdminController;

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

//Admin routes

Route::prefix('/admin')->group(function(){
    Route::get('/login', [AdminController::class, 'index'])->name('admin.form');
    Route::post('/login/proceed', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('admin')->name('admin.dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->middleware('admin')->name('admin.logout');
});


Route::get('/',\App\Http\Controllers\Home\HomeController::class)->name('home');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [UserProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [UserProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [UserProfileController::class, 'destroy'])->name('profile.destroy');
//});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [\App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');

    Route::get('/product', [\App\Http\Controllers\User\ProductController::class, 'index'])->name('product.index');

    Route::post('/product/scan', [\App\Http\Controllers\User\ProductController::class, 'scanBarcode'])->name('product.scan');

    Route::get('/product/{barcode}', [\App\Http\Controllers\User\ProductController::class, 'product'])->name('product.show');

});

require __DIR__.'/auth.php';
