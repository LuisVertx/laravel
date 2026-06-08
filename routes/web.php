<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;



Route::get('/home', [BasicController::class, 'home'])->name('home');
Route::get('/home_admin', [BasicController::class, 'home_admin'])->name('home_admin');
Route::get('/account', [BasicController::class, 'account'])->name('account');
Route::get('/cart', [BasicController::class, 'cart'])->name('cart');
Route::get('/authorisation', [BasicController::class, 'authorisation'])->name('authorisation');
Route::post('/submit', [BasicController::class, 'submit'])->name('submit');





