<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontController::class,'getHome'])->name('home');
Route::get('/show',[ShowController::class, 'getShows'])->name('show');
Route::get('/show/{name}', [ShowController::class, 'show'])->name('singleshow.show');
Route::get('/event', [EventController::class,'getEvents'])->name('event');
Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');

