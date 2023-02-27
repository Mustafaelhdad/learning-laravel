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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'users', 'middleware' => 'auth'], function() {
    Route::get('/', function () {
        return 'hello';
    });
});

Route::get('check', function () {
    return 'middleware';
})->middleware('auth');

Route::get('test',[\App\Http\Controllers\SecondController::class, 'showString']);

Route::group(['namespace' => 'Admin'],function (){
//    Route::get('first', [\App\Http\Controllers\SecondController::class, 'showString'])-> middleware('auth');
//    Route::get('first', [\App\Http\Controllers\SecondController::class, 'showString'])-> middleware('auth');
    Route::get('first', [\App\Http\Controllers\SecondController::class, 'showString'])-> middleware('auth');
    Route::get('first1', [\App\Http\Controllers\SecondController::class, 'showString1']);
    Route::get('first2', [\App\Http\Controllers\SecondController::class, 'showString2']);
});

Route::get('login', function () {
    return 'Must be loged in to acess this page!';
}) -> name('login');

Route::resource('news', \App\Http\Controllers\NewsController::class);

Route::get('welcomeuser', [\App\Http\Controllers\Controller::class, 'sayHi']);

Route::get('landing', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
