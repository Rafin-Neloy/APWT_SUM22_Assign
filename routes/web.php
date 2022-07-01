<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Page;
use App\Models\User;

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


Route::get('/',[Page::class,'home']);
Route::get('/login',[Page::class,'login']);
Route::get('/registration',[Page::class,'registration']);
Route::post('/regis-user',[Page::class,'registerUser'])->name('register-user');
Route::post('/login-user',[Page::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[Page::class,'dashboard']);
Route::get('/auth.list',[Page::class,'list']);