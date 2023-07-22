<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

// default while installed
// Route::get('/', function () {
//     return view('welcome');
// });

// works
//Route::get('/', 'App\Http\Controllers\HomeController@index')->name('homepage');
Route::get('/',[HomeController::class,'index'])->name('homepage');

Route::get('/login',[LoginController::class,'loginPage'])->name('loginpage');
Route::get('/registration',[LoginController::class,'registrationPage'])->name('registrationpage');