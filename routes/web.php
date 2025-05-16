<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MyBlogsController;
use App\Http\Controllers\CreateBlogController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\AboutMeController;
// 1) Ruta raíz disponible para todos
Route::get('/', [IndexController::class, 'index'])->name('inicio');

// 2) Formulario de login (GET) y procesamiento (POST)
Route::get('/login', function () {
    // Puedes también usar un método en LoginController:
    // return app(LoginController::class)->showLoginForm();
    return view('pages.inicio');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');

// 3) Registro y logout
Route::post('/registrar', [LoginController::class, 'registrar'])->name('registrar');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// 4) Rutas públicas
Route::get('/index',   [IndexController::class, 'index'])->name('index');
Route::get('/myblogs', [MyBlogsController::class, 'index'])->name('myBlogs');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/aboutme', [AboutMeController::class, 'index'])->name('aboutMe');
Route::get('/feed',       [FeedController::class, 'index'])->name('feed');

// 5) Rutas protegidas por sesión
Route::get('/createblog', function () {
    if (!auth()->check()) {
        return view('pages.inicio');
    }
    return app(CreateBlogController::class)->index();
})->name('createBlog');
