<?php

use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\StadiumController;
use App\Http\Controllers\Front\StoreController;
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

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'MainPageController@index')->name('home.home')->middleware('auth');
    Route::get('/register' , 'RegisterController@index')->name('register.home')->middleware('auth');
});

// Home
Route::get('/' , function(){
    return view('home.index');
})->name('home.guest');

//about
Route::get('/about',function(){
return view('about.index');
})->name('about.home');
//contact
Route::get('/contact',function(){
return view('contact.index');
})->name('contact.home');
//event index
Route::get('/event',function(){
return view('events.index');
})->name('event.home');
//event
Route::get('/event/details',function(){
return view('events.event');
})->name('event.event');
//faq
Route::get('/faq' , [FaqController::class, 'index'])->name('faq.home');
//login
// Route::get('/login',function(){
// return view('login.index');
// })->name('login.home');
//matches
Route::get('/matches',function(){
return view('matches.index');
})->name('match.home');
//profile
// Route::get('/profile',function(){
// return view('profile.index');
// })->name('profile.home');
//update profile
Route::get('/updateProfile/{uuid}' , [UpdateProfileController::class, 'index'])->name('profile.info');
Route::put('/updateProfile/{uuid}', [UpdateProfileController::class, 'updateProfile'])->name('profile.update');

//register
// Route::get('/register',function(){
// return view('register.index');
// })->name('register.home');
// logout
// Route::get('/',function(){
//     return view('home.index');
// })->name('logout');
//stadium
Route::get('/stadium',[StadiumController::class,'index'])->name('stadium.home');
//store
Route::get('/store' , [StoreController::class,'index'])->name('store.home');
//userTicket
Route::get('/userticket',function(){
return view('userTicket.index');
})->name('userTicket.home');

