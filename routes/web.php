<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageControlller;
use Illuminate\Support\Facades\Route;

/*
Route::get('/',[PageControlller::class, 'index'])->name('main');

Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('members',[HomeController::class,'members'])->name('members');
*/
Route::resource("companies", CompaniesController::class)->middleware('auth');
Auth::routes();
Route::get("/", [HomeController::class,"index"])->name("home");
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
