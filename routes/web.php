<?php

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
    return redirect()->route('login');
});
Route::get('/intesa@admin/8G4oT5nqh4Q3M47', [App\Http\Controllers\RoutesController::class, 'register'])->name('register.student');

Route::post('/login-post', [App\Http\Controllers\RoutesController::class, 'login'])->name('login.post');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



