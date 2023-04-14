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
    return view('welcome');
})->name('home');
Route::get('test', [\App\Http\Controllers\TestController::class, 'test']);

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login.index');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'store'])->name('login.store');

//Route::view('register/create', 'auth.index');
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register.index');
//Route::get('register/create', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register.create');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register.store');
