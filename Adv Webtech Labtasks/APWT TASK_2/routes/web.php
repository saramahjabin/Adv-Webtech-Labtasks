<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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
});

Route::get('/contact',[CustomerController::class, 'contact'])->name('contact');
Route::post('/contact',[CustomerController::class, 'contactSubmitted'])->name('contact');
Route::get('/home',[CustomerController::class, 'home'])->name('home');
Route::get('/customerCreate',[CustomerController::class, 'customerCreate'])->name('customerCreate');
Route::post('/customerCreate',[CustomerController::class, 'customerCreateSubmitted'])->name('customerCreate');
Route::get('/login',[CustomerController::class, 'login'])->name('login');
Route::post('/login',[CustomerController::class, 'loginFormSubmitted'])->name('login');
Route::post('/logout',[CustomerController::class, 'logout'])->name('logout');