<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

Route::get('/', [ListingController::class, 'index']);
//code below allows for clean check of listing and if 
//it doesnt exist it'll return 404

//the middleware ('auth') part is to ensure that the user can only create a listing if they are logged in 
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//this is for storing listing data
Route::post('/listings', [ListingController::class,'store'])->middleware('auth');

//show edit form
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');

//updatelisting
Route::put('/listings/{listing}',[ListingController::class,'update'])->middleware('auth');

//delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');


//this is for single listing
Route::get('/listings/{listing}', [ListingController::class,'show']);

//show register/create form
Route::get('/register',[UserController::class,'create']);

//create new user route
Route::post('/users',[UserController::class, 'store']);

//logout user
Route::post('/logout', [UserController::class, 'logout']);

//show login form the -> name(login part is to ensure user is logged in inorder to see forms)
Route::get('/login', [UserController::class,'login'])->name('login');

//login user
Route::post('/users/authenticate',[UserController::class,'authenticate']);