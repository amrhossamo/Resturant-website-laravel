<?php

use App\Http\Controllers\BookingsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\googleController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserssController;
use App\Http\Middleware\adminauth;
use App\Models\Bookings;
use App\Models\userss;
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
Route::get('adpanel',function(){
    return view('adpanel');
})->middleware('adminauth');

Route::get('profile',function(){
    return view('sections.profile');
});

Route::get('welcome',function(){
    return view('welcome');
});
Route::get('/',function(){
    return view('sections.home');
});
Route::get('layout',function(){
    return view('layouts.layout');
});
Route::get('about',function(){
    return view('sections.about');
});
Route::get('/menu', [MenuController::class, 'menu']);


// items
Route::resource('items',ItemsController::class)->middleware('adminauth');



                                           // bookings controller //
Route::resource('Bookings',BookingsController::class)->middleware('limitedAccess');
Route::resource('bookings',BookingsController::class)->only(['show']);
                                        // confirm and reject
Route::post('bookings/{booking}/confirm', [BookingsController::class, 'confirmBooking'])->name('bookings.confirm');
Route::post('bookings/{booking}/reject', [BookingsController::class, 'rejectBooking'])->name('bookings.reject');



// contacts
Route::get('contact',[ContactController::class , 'index']);
Route::post('contact/insert',[ContactController::class, 'insert'])->name('contact');
Route::get('viewmessages',[ContactController::class , 'contactshow'])->name('contact.show')->middleware('adminauth');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(auth()->user()->role == 'admin'){
            return view('adpanel');
        }else {
            return view('sections.home');
        }
    })->name('dashboard');
});


// login with google
Route::get('auth/google',[googleController::class,'form'])->name('form');
Route::get('auth/google/callback',[googleController::class,'loging'])->name('loging');







