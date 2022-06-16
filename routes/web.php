<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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


Route::get('/',[PagesController::class,'home']);
Route::get('/login',[PagesController::class,'login']);
Route::get('/registration',[PagesController::class,'registration']);
Route::post('/regis-user',[PagesController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[PagesController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[PagesController::class,'dashboard']);
Route::get('/auth.list',[PagesController::class,'list']);