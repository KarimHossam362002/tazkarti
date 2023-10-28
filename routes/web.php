<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Require __DIR__. "./front/front.php";
Require __DIR__. "./admin/admin.php";
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

Route::get('/welcome', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile.home');
// try to copy the same thing to all routes in HomeController so there will be a middleware for every route
