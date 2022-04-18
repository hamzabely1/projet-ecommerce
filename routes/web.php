<?php

use App\Http\Controllers\articlecontroller;
use App\Http\Controllers\postcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[articlecontroller::class,'index']);

Route::get('/post/{id}',[postcontroller::class,'post']);

Route::get('post/2',[articlecontroller::class,'index2']);
