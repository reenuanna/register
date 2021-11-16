<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/',[UserController::class,'index']);
Route::get('/regview',[UserController::class,'regview']);
Route::post('/register',[UserController::class,'register']);
Route::get('/userlogin',[UserController::class,'loginview']);
Route::post('/login',[UserController::class,'login']);
// Route::get('/addT',[UserController::class,'addt']);

Route::get('/movie',[UserController::class,'addt']);
Route::get('/getmovie/{id}',[UserController::class,'getmovie']);
