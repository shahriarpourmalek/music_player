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


use App\Events\MusicStreamEvent;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SongController;

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
Route::get('/',function (){
    return view('index');
});

Route::get('/login',[AuthController::class,'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::get('/register', [AuthController::class,'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class,'register'])->name('register');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');
Route::resource('songs',SongController::class);
Route::post('/song-progress', 'SongController@progress');
Route::get('/test',function (){
    $song = \App\Models\Song::find(1);
    event(new MusicStreamEvent($song));

});
