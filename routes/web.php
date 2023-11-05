<?php

use App\Http\Controllers\language\LocalizationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Require __DIR__. "./front/front.php";
// Require __DIR__. "./admin/admin.php";
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
// Localization Route



   
    
    Route::middleware(['auth'])->group(function () {
        // Routes that require the 'auth' middleware
        Route::get('/dashboard', 'DashboardController@index');
        Route::get('/profile', 'ProfileController@index');
    });
    Route::get('/welcome', function () {
        return view('welcome');
    });
    
    
    Auth::routes();
    
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile.home');



  


