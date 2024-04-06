<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/signup', function(){
    return view('signup-login/signup');
})->name('register.route');

Route::post('/register',[UserController::class, 'save']
)->name('save.user');

Route::get('/login', function(){
    return view('signup-login/login');
})->name('login.route');

Route::post('/loginValidate', [UserController::class, 'login'])->name('validate.route');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');


// como posso criar um auth próprio para captar dados de um outro tipo de registro, sem ser do tipo usuário?
