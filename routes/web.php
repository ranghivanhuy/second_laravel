<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProductController;

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

    Route::group(['as' => 'posts.'], function(){
        Route::get('/posts', [PostController::class, 'index'])->name('index');
    
        Route::get('posts/create', [PostController::class, 'create'])->name('create');
        Route::post('posts', [PostController::class, 'store'])->name('store');
        Route::put('posts/update/{id}', [PostController::class, 'update'])->name('update');
    
        Route::get('posts/show/{id}', [PostController::class, 'show'])->name('show');
    
        Route::delete('posts/delete', [PostController::class, 'tickToDelete'])->name('delete');
        
        Route::get('posts/search', [PostController::class, 'search'])->name('search');
    });
    
 
     // Dashboard
     Route::get('dashboard', [UserController::class, 'getDashboard'])->name('dashboard');
 
     // Logout
     Route::get('logout', [UserController::class, 'getLogout'])->name('logout');


Route::group(['middleware' => 'localization', 'prefix' => Session::get('locale')], function() {

    Route::get('/', [UserController::class, 'index'])->name('home');

    Route::post('/lang', [LangController::class, 'postLang'])->name('switchLang');

    // Register account
    Route::get('register',[UserController::class, 'getRegister'])->name('getRegister');
    Route::post('register',[UserController::class, 'postRegister'])->name('postRegister');

    // Login account
    Route::get('login', [UserController::class, 'getLogin'])->name('getLogin');
    Route::post('login', [UserController::class, 'postLogin'])->name('postLogin');

    // Dashboard
    Route::get('dashboard', [UserController::class, 'getDashboard'])->name('dashboard');

    // Logout
    Route::get('logout', [UserController::class, 'getLogout'])->name('logout');

    Route::get('/candidate', [CandidateController::class, 'create'])->name('candidate.create');

});

        Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/user', [AdminController::class, 'user'])->name('user');
    Route::get('/permission', [AdminController::class, 'permission'])->name('permission');
Route::get('/home', [AdminController::class, 'home']);

 // Login account
 Route::get('login', [UserController::class, 'getLogin'])->name('getLogin');
 Route::post('login', [UserController::class, 'postLogin'])->name('postLogin');


 Route::group(['prefix' => 'products'], function () {
     Route::get('/', [ProductController::class, 'index'])
            ->name('products.list-product');
     Route::get('create', [ProductController::class, 'create'])
            ->name('products.create');
    Route::post('create', [ProductController::class, 'store'])
            ->name('products.store');
 });