<?php

use App\Http\Controllers\ComunityController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/main', [ComunityController::class, 'showProfile'])->name('main.route');

Route::post('/postcode', [ComunityController::class, 'codeinput'])->name('codepost');

Route::post('/main', [UserController::class, 'showAll']);