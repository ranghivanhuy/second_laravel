<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

Route::get('/',[UserController::class, 'index'])->name('home');

// Register account
Route::get('register',[UserController::class, 'getRegister'])->name('getRegister');
Route::post('register',[UserController::class, 'postRegister'])->name('postRegister');

// Login account
Route::get('login', [UserController::class, 'getLogin'])->name('getLogin')->middleware('user');
Route::post('login', [UserController::class, 'postLogin'])->name('postLogin');

// Dashboard
Route::get('dashboard', [UserController::class, 'getDashboard'])->name('dashboard');

// Logout
Route::get('logout', [UserController::class, 'getLogout'])->name('logout');


// POST
Route::resource('posts', PostController::class);
Route::get('/search', [PostController::class, 'search'])->name('search');
// Route::get('posts', [PostController::class, 'index'])->name('posts.index');

// Route::group(['as' => 'posts.'], function(){
//     Route::get('', [PostController::class, 'index'])->name('index');

//     Route::get('/create', [PostController::class, 'create'])->name('create');
//     Route::post('/store', [PostController::class, 'store'])->name('store');

//     Route::get('/{id}/edit', [PostController::class, 'edit'])->name('edit');
//     Route::put('/update/{id}', [PostController::class, 'update'])->name('update');

//     Route::get('/show/{id}', [PostController::class, 'show'])->name('show');

//     Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->name('destroy');

//     Route::get('/search', [PostController::class, 'search'])->name('search');
// });