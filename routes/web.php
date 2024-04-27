<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendedController;
use App\Http\Controllers\HeadercontrollerController;
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [FrontendedController::class, 'frontent'])->name('frontent');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::POST('/profilesetting', [ProfileController::class, 'profilesetting'])->name('profilesetting');
Route::POST('/chagepassword', [ProfileController::class, 'chagepassword'])->name('chagepassword');
Route::resource('header', HeadercontrollerController::class);
