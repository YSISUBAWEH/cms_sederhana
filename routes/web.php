<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');


Route::get('/postingan', [App\Http\Controllers\PostController::class,'index']);
Route::get('/postingan/create', [App\Http\Controllers\PostController::class,'create']);
Route::post('/postingan/store', [App\Http\Controllers\PostController::class,'store']);
Route::get('/postingan/edit/{id}', [App\Http\Controllers\PostController::class,'edit']);
Route::put('/postingan/update/{id}', [App\Http\Controllers\PostController::class,'update']);
Route::get('/postingan/delete/{id}', [App\Http\Controllers\PostController::class,'delete']);
Route::get('/postingan/show', [App\Http\Controllers\PostController::class,'show']);

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('show', [PostController::class, 'show'])->name('show');