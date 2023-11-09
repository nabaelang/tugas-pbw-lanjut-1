<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PostController;

//route resource


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

Route::get("/", [HomeController::class, "bukaPageHome"]);
Route::get("/about", [AboutController::class, "about"]);
Route::get("/contact", [ContactController::class, "contact"]);
Route::get("/portofolio", [PortofolioController::class, "portofolio"]);
Route::middleware(["auth:web"])->group(function () {
Route::resource('/posts', \App\Http\Controllers\PostController::class);
});
Route::get("/login", [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
