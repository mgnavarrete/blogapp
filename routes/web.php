<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MyBlogsController;
use App\Http\Controllers\CreateBlogController;
use App\Http\Controllers\FeedController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// RUTAS PÚBLICAS //
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('index');
    }
    return view('pages.inicio');
})->name('inicio');

// RUTAS DE AUTENTICACIÓN //
Route::post('/registrar', [LoginController::class, 'registrar'])->name('registrar');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// RUTAS PROTEGIDAS //
Route::middleware(['auth'])->group(function () {
    Route::get('/index', [IndexController::class, 'index'])->name('index');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/myblogs', [MyBlogsController::class, 'index'])->name('myBlogs');
    Route::get('/createblog', [CreateBlogController::class, 'index'])->name('createBlog');
    Route::get('/feed', [FeedController::class, 'index'])->name('feed');
});
