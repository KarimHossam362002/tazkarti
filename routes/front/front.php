<?php

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
// Home
Route::get('/',function(){
return view('home.index');
})->name('home.index');

//about
Route::get('/about',function(){
return view('about.index');
})->name('about.index');
//contact
Route::get('/contact',function(){
return view('contact.index');
})->name('contact.home');
//event index
Route::get('/event',function(){
return view('events.index');
})->name('event.index');
//event
Route::get('/event/details',function(){
return view('events.event');
})->name('event.event');
//faq
Route::get('/faq',function(){
return view('faq.index');
})->name('faq.index');
//login
Route::get('/login',function(){
return view('login.index');
})->name('login.index');
//matches
Route::get('/matches',function(){
return view('matches.index');
})->name('match.index');
//profile
Route::get('/profile',function(){
return view('profile.index');
})->name('profile.index');
//update profile
Route::get('/updateprofile',function(){
return view('profile.info');
})->name('profile.info');
//register
Route::get('/register',function(){
return view('register.index');
})->name('register.index');
//stadium
Route::get('/stadium',function(){
return view('stadium.index');
})->name('stadium.index');
//store
Route::get('/store',function(){
return view('store.index');
})->name('store.index');
//userTicket
Route::get('/userticket',function(){
return view('userTicket.index');
})->name('userTicket.index');

