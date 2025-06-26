<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/', function () {
    return view('home');
});

Route::view('/contact', 'contact');
Route::view('/about', 'about');
