<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::view('/','home');
Route::view(uri: '/content',view: 'content')->middleware('auth');

Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',action: [RegisteredUserController::class,'store']);

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);