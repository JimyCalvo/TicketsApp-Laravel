<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

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
Route::view('/login',"Auth.login")->name('login');
Route::view('/register',"Auth.register")->name('register');
Route::view('/user',"user")->name('User');
Route::view('/user1',"user1")->name('User1');
Route::view('/user2',"user2")->name('User2');
Route::post('/check-login',[LoginController::class,'login'])->name('check-login');
Route::post('/check-register',[RegisterController::class,'register'])->name('check-register');
Route::post('/logout',[LogoutController::class,'logout'])->name('logout');
Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');
