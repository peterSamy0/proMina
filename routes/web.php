<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumController;

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


Route::middleware(['auth'])->group(function () {
    // Route::resource('/', UserController::class);
    
});

// routes/web.php
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('home', function(){
    return view('home');
})->name('home');
Route::get('gallery', [AlbumController::class, 'index'])->name('gallery');
Route::get('/sign-up', [UserController::class, 'create']);
Route::post('/sign-up', [UserController::class, 'store'])->name('signup');


Route::post('/album', [AlbumController::class, 'store'])->name('album');
Route::delete('gallery/{id}', [AlbumController::class, 'destroy']);