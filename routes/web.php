<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    //kas-masuk
    Route::get('/data-kasmasuk', [\App\Http\Controllers\KasmasukController::class, 'index'])->name('data-kasmasuk');
    Route::get('/create-kasmasuk', [\App\Http\Controllers\KasmasukController::class, 'create'])->name('create-kasmasuk');
    Route::post('/simpan-kasmasuk', [\App\Http\Controllers\KasmasukController::class, 'store'])->name('simpan-kasmasuk');
    Route::get('/edit-kasmasuk/{id}', [\App\Http\Controllers\KasmasukController::class, 'edit'])->name('edit-kasmasuk');
    Route::post('/update-kasmasuk/{id}', [\App\Http\Controllers\KasmasukController::class, 'update'])->name('update-kasmasuk');
    Route::get('/delete-kasmasuk/{id}', [\App\Http\Controllers\KasmasukController::class, 'destroy'])->name('delete-kasmasuk');
});
