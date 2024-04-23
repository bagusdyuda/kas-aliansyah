<?php

use App\Http\Controllers\KasmasukController;
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

    //kas brankas
    Route::get('/data-kasmasuk', [\App\Http\Controllers\KasmasukController::class, 'index'])->name('data-kasmasuk');
    Route::get('/create-kasmasuk', [\App\Http\Controllers\KasmasukController::class, 'create'])->name('create-kasmasuk');
    Route::post('/simpan-kasmasuk', [\App\Http\Controllers\KasmasukController::class, 'store'])->name('simpan-kasmasuk');
    Route::get('/show-kasmasuk/{id}', [\App\Http\Controllers\KasmasukController::class, 'show'])->name('show-kasmasuk');
    Route::get('/edit-kasmasuk/{id}', [\App\Http\Controllers\KasmasukController::class, 'edit'])->name('edit-kasmasuk');
    Route::post('/update-kasmasuk/{id}', [\App\Http\Controllers\KasmasukController::class, 'update'])->name('update-kasmasuk');
    Route::get('/delete-kasmasuk/{id}', [\App\Http\Controllers\KasmasukController::class, 'destroy'])->name('delete-kasmasuk');

    //kas sales
    Route::get('/data-setorkas', [\App\Http\Controllers\SetorankasController::class, 'index'])->name('data-setorkas');
    Route::get('/create-setorkas', [\App\Http\Controllers\SetorankasController::class, 'create'])->name('create-setorkas');
    Route::post('/simpan-setorkas', [\App\Http\Controllers\SetorankasController::class, 'store'])->name('simpan-setorkas');
    Route::get('/show-setorkas/{id}', [\App\Http\Controllers\SetorankasController::class, 'show'])->name('show-setorkas');
    Route::get('/edit-setorkas/{id}', [\App\Http\Controllers\SetorankasController::class, 'edit'])->name('edit-setorkas');
    Route::post('/update-setorkas/{id}', [\App\Http\Controllers\SetorankasController::class, 'update'])->name('update-setorkas');
    Route::get('/delete-setorkas/{id}', [\App\Http\Controllers\SetorankasController::class, 'destroy'])->name('delete-setorkas');

    //debit bank
    Route::get('/data-debitmasuk', [\App\Http\Controllers\DebitmasukController::class, 'index'])->name('data-debitmasuk');
    Route::get('/create-debitmasuk', [\App\Http\Controllers\DebitmasukController::class, 'create'])->name('create-debitmasuk');
    Route::post('/simpan-debitmasuk', [\App\Http\Controllers\DebitmasukController::class, 'store'])->name('simpan-debitmasuk');
    Route::get('/show-debitmasuk/{id}', [\App\Http\Controllers\DebitmasukController::class, 'show'])->name('show-debitmasuk');
    Route::get('/edit-debitmasuk/{id}', [\App\Http\Controllers\DebitmasukController::class, 'edit'])->name('edit-debitmasuk');
    Route::post('/update-debitmasuk/{id}', [\App\Http\Controllers\DebitmasukController::class, 'update'])->name('update-debitmasuk');
    Route::get('/delete-debitmasuk/{id}', [\App\Http\Controllers\DebitmasukController::class, 'destroy'])->name('delete-debitmasuk');

    //kas kantor
    Route::get('/data-kaskantor', [\App\Http\Controllers\KaskantorController::class, 'index'])->name('data-kaskantor');
    Route::get('/create-kaskantor', [\App\Http\Controllers\KaskantorController::class, 'create'])->name('create-kaskantor');
    Route::post('/simpan-kaskantor', [\App\Http\Controllers\KaskantorController::class, 'store'])->name('simpan-kaskantor');

});
