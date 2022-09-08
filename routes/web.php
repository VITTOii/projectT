<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// All Listings
Route::get('/', [\App\Http\Controllers\listingControler::class, 'index']);

//Show Create Form
Route::get('/listings/create', [\App\Http\Controllers\listingControler::class, 'create'])->middleware('auth');

//Single Listing Date
Route::post('/listings', [\App\Http\Controllers\listingControler::class, 'store'])->middleware('auth');

//Show Edit Form
Route::get('/listings/{listing}/edit', [\App\Http\Controllers\listingControler::class, 'edit'])->middleware('auth');

//Update Listing
Route::put('/listings/{listing}', [\App\Http\Controllers\listingControler::class, 'update'])->middleware('auth');

//Delete Listing
Route::delete('/listings/{listing}', [\App\Http\Controllers\listingControler::class, 'destroy'])->middleware('auth');

//Manager Listings
Route::get('/listings/manage/', [\App\Http\Controllers\listingControler::class, 'manage'])->middleware('auth');

//Single Listing
Route::get('/listings/{listing}', [\App\Http\Controllers\listingControler::class, 'show']);

//Show Create User Form
Route::get('/register', [\App\Http\Controllers\userController::class, 'create'])->middleware('guest');

//Create New User
Route::post('/users', [\App\Http\Controllers\userController::class, 'store']);

//Log User Out
Route::post('/logout', [\App\Http\Controllers\userController::class, 'logout'])->middleware('auth');

//Show Login Form
Route::get('/login', [\App\Http\Controllers\userController::class, 'login'])->name('login')->middleware('guest');

//Log In User
Route::post('/users/authenticate', [\App\Http\Controllers\userController::class, 'authenticate']);


