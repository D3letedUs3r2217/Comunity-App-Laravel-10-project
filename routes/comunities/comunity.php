<?php

use App\Http\Controllers\ComunityController;
use Illuminate\Support\Facades\Route;


Route::prefix('/comunity/{code}')->group(function(){

    Route::get('/home', [ComunityController::class, 'routeMaintain'])->name('comunity-template');
        Route::get('/chat', [ComunityController::class, 'routeMaintain'])->name('comunity-chat');
        Route::post('/postchat', [ComunityController::class, 'chatpost'])->name('post.message');
        Route::get('/dashboard', [ComunityController::class, 'routeMaintain'])->name('comunity-dashboard');

        
})->name('comunityroute');



Route::get('idSearch', [ComunityController::class ,'codesearch']);

    Route::get('/create', function(){
    return view('comunities/comunity-create');
        })->name('createC'); 

Route::post('/createComunity', [ComunityController::class, 'create'])->name('createComunity');