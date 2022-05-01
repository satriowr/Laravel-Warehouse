<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\kib_A_Controller;


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



route::get('/', [LoginController::class, 'index'])->name("login")->middleware('guest');
route::post('/', [LoginController::class, 'auth']);

route::get('/logout', [LoginController::class, 'logout']);

route::get('/kib-a', [kib_A_Controller::class, 'index'])->middleware('auth');
Route::get('/kib-a/more/{id}', [kib_A_Controller::class, 'more'])->middleware('auth');
Route::get('/kib-a/delete/{id}', [kib_A_Controller::class, 'delete'])->middleware('auth');
route::get('/kib-a/insert', [kib_A_Controller::class, 'insert'])->middleware('auth');
route::post('/kib-a/insert', [kib_A_Controller::class, 'store'])->middleware('auth');