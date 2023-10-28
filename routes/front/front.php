<?php

use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MatchController;
use App\Http\Controllers\Front\StadiumController as StadiumController;
use App\Http\Controllers\Front\StoreController;
use App\Http\Controllers\Front\TazkaraController;
use App\Http\Controllers\Front\UpdateProfileController;
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

Route::middleware(['LocalizationMiddleware'])->group(function () {
  
    Route::namespace('App\Http\Controllers')->group(function () {
        Route::get('/{locale}', 'MainPageController@index')->name('home.home')->middleware('auth');
        Route::get('/stadium/{locale}', 'StadiumController@index')->name('stadium.home')->middleware('auth');
        Route::get('/register/{locale}' , 'RegisterController@index')->name('register.home')->middleware('auth');
    });
    
// Home
Route::get('/{locale}' , function(){
    return view('home.index');
})->name('home.guest');

//about
Route::get('/about/{locale}',function(){
return view('about.index');
})->name('about.home');
//contact
Route::get('/contact/{locale}',function(){
return view('contact.index');
})->name('contact.home');
//event index
Route::get('/event/{locale}',function(){
return view('events.index');
})->name('event.home');
//event
Route::get('/event/details/{locale}',function(){
return view('events.event');
})->name('event.event');
//faq
Route::get('/faq/{locale}' , [FaqController::class, 'index'])->name('faq.home');

//matches
Route::get('/matches/{locale}' , [MatchController::class , 'index'])->name('match.home');

//update profile
Route::get('/updateProfile/{uuid}/{locale}' , [UpdateProfileController::class, 'index'])->name('profile.info');
Route::put('/updateProfile/{uuid}/{locale}', [UpdateProfileController::class, 'updateProfile'])->name('profile.update');


//store
Route::get('/store/{locale}' , [StoreController::class,'index'])->name('store.home');
//userTicket
Route::get('/userticket/{locale}',function(){
return view('userTicket.index');
})->name('userTicket.home');

// user ticket create
Route::post('userticket/{locale}' , [TazkaraController::class ,'createTazkara'])->name('userTicket.create');
});


