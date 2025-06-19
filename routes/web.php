<?php

use App\Http\Controllers\NewsletterSubscriberController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function() {
//    return view('site.home');
//});

Route::get('/', \App\Http\Controllers\HomeController::class);
Route::post('/subscribe', [NewsletterSubscriberController::class, 'subscribe'])->name('newsletter');
