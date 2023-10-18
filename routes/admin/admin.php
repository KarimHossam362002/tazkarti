<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\StoreController;
use App\Models\Entertainment;
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
Route::get('/dashboard', function (){
    return view ('admin.layout');
})->name('dashboard.index');
// category
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

