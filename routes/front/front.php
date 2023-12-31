<?php

use App\Http\Controllers\Front\EventController;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\HomeProfileController;
use App\Http\Controllers\Front\MatchController;
use App\Http\Controllers\Front\StadiumController as StadiumController;
use App\Http\Controllers\Front\StoreController;
use App\Http\Controllers\Front\TazkaraController;
use App\Http\Controllers\Front\UpdateProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

   
    
    
    Auth::routes();
    
    
      
        Route::namespace('App\Http\Controllers')->group(function () {
            Route::get('', 'MainPageController@index')->name('home.home');
            Route::get('/register' , 'RegisterController@index')->name('register.home');
        });
        
    // Home
    Route::get('/' , function(){
        return view('home.index');
    })->name('home.guest');
    // Stadium
    Route::get('/stadium' , [StadiumController::class , 'index'])->name('stadium.home');
    //about
    Route::get('/about',function(){
    return view('about.index');
    })->name('about.home');
    //contact
    Route::get('/contact',function(){
    return view('contact.index');
    })->name('contact.home');
    //event index
    Route::get('/event' , [EventController::class , 'index'])
    ->name('event.home');
    //event
    Route::get('/event/details',function(){
    return view('events.event');
    })->name('event.event');
    //faq
    Route::get('/faq' , [FaqController::class, 'index'])->name('faq.home');
    
    //matches
    Route::get('/matches' , [MatchController::class , 'index'])->name('match.home');
    
    
    
    //update profile
    Route::get('/updateProfile/{id}' , [UpdateProfileController::class, 'index'])->name('profile.info');
    Route::put('/updateProfile/{id}', [UpdateProfileController::class, 'updateProfile'])->name('profile.update');
    
    
    //store
    Route::get('/store' , [StoreController::class,'index'])->name('store.home');
    //userTicket
    Route::get('/userticket',function(){
    return view('userTicket.index');
    })->name('userTicket.home');
    
    // user ticket create
    // Route::post('userticket' , [TazkaraController::class ,'createTazkara'])->name('userTicket.create');
    // profile
    Route::get('/profile' , [HomeProfileController::class, 'index'])->name('profile.home');
    
    // tazkara create
    Route::post('/user-ticket' , [TazkaraController::class , 'createTazkara'])->name('userTicket.create');



