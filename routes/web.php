<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing 

// Logged In Users
Route::middleware('auth')->group(function(){

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('update');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Manage Listings
Route::get('/listings/manage',[ListingController::class, 'manage']);

// Log User Out
Route::post('/logout',[UserController::class,'logout']);

});

// Non-Logged in Users
Route::middleware('guest')->group(function(){

// Show Register/ Create Form
Route::get('/register',[UserController::class,'create']);

// Show Login Form
Route::get('/login',[UserController::class,'login'])->name('login');
});

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Create New User
Route::post('/users',[UserController::class,'store']);

// Login User
Route::post('/users/authenticate',[UserController::class,'authenticate']);

