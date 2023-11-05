<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TazkaraController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournmentController;
use App\Http\Controllers\UserController;
use App\Models\Entertainment;
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
    // main dashboard done
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    
    
    // category done
    Route::resource('admin/category',CategoryController::class)->except('show');
    // faq 
    Route::resource('admin/faq',FaqController::class)->except('show');
    // contact 
    Route::get('admin/contact',[ContactUsController::class , 'index'])->name('contact.index');
    Route::post('admin/contact',[ContactUsController::class , 'store'])->name('contact.store');
    Route::delete('admin/contact/{id}',[ContactUsController::class , 'destroy'])->name('contact.destroy');
    // stadium 
    Route::resource('admin/stadium' , StadiumController::class)->except('show');
    // entertainments
    Route::resource('admin/entertainment' , EntertainmentController::class)->except('show');
    // stores
    Route::resource('admin/store' , StoreController::class)->except('show');
    // matches
    Route::resource('admin/match' , MatchController::class)->except('show');
    // tournments
    Route::resource('admin/tournment' , TournmentController::class)->except('show');
    // teams
    Route::resource('admin/team' , TeamController::class)->except('show');
    // users
    Route::get('admin/user' , [UserController::class , 'index'])->name('user.index');
    Route::get('admin/user/edit/{uuid}' , [UserController::class , 'edit'])->name('user.edit');
    Route::delete('admin/user/{uuid}' , [UserController::class , 'destroy'])->name('user.destroy');
    Route::put('admin/user/{uuid}' , [UserController::class , 'update'])->name('user.update');
    // tazkaras
    Route::get('admin/tazkara' , [TazkaraController::class , 'index'])->name('tazkara.index');



