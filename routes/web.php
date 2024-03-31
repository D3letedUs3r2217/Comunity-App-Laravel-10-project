<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

require __DIR__ . '\signup.php';
require __DIR__.'\main.php';
require __DIR__.'\comunities\comunity.php';


Route::get('/', function(){
    return redirect()->route('register.route');
});
Route::get('/responseGeneral', function(){
    return view('response', []);
})->name('response.route');

