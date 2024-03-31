<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/signup', function(){
    return view('signup-login/signup');
})->name('register.route');

Route::post('/register',[UserController::class, 'save']
)->name('save.student');

