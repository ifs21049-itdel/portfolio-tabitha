<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
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


Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/home/create', [HomeController::class, 'create'])->name('home.create');
Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
Route::get('/home/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
Route::put('/home/update/{id}', [HomeController::class, 'update'])->name('home.update');
Route::delete('/home/destroy/{id}', [HomeController::class, 'destroy'])->name('home.destroy');

Auth::routes();

// Route::get('/', function () {
//     return view('landingPage');
// });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landingPage');
