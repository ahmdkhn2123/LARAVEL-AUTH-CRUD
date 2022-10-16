<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customauthC;
use App\Http\Controllers\productC;

//Authentication Routes
Route::get('register',[customauthC::class,'registeration']);
Route::POST('register',[customauthC::class,'registerU']);

Route::get('login',[customauthC::class,'login']);
Route::POST('loginUser',[customauthC::class,'loginU']);


Route::get('dashboard',[customauthC::class,'dashboard'])->middleware('auth');;

Route::get('logout',[customauthC::class,'logout']);

//Products Routes

Route::POST('add',[productC::class,'addP']);
Route::get('show',[productC::class,'show']);
Route::get('/delete/{id}',[productC::class,'del']);
Route::get('/edit/{id}',[productC::class,'edit']);
Route::POST('/update/{id}',[productC::class,'update']);


