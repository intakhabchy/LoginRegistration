<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublisherController;

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
// Route::get('/welcomePage', function () {
//     return view('homepage.home');
// })->name('welcomepage');

// works
//Route::get('/', 'App\Http\Controllers\HomeController@index')->name('homepage');

Route::get('/',[HomeController::class,'index'])->name('homepage');

Route::get('/login',[LoginController::class,'loginPage'])->name('loginpage');
Route::post('/login',[LoginController::class,'loginPost'])->name('loginpost');

Route::get('/registration',[LoginController::class,'registrationPage'])->name('registrationpage');
Route::post('/registration',[LoginController::class,'registrationPost'])->name('registrationpost');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');

Route::get('/publisher',[PublisherController::class,'index'])->name('publisherlist')->middleware('auth');
Route::post('/publisher',[PublisherController::class,'store'])->name('publishersave')->middleware('auth');

Route::get('/author',[AuthorController::class,'index'])->name('authorlist')->middleware('auth');