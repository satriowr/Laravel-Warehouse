<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\kib_A_Controller;
use App\Http\Controllers\kib_B_Controller;
use App\Http\Controllers\kib_C_Controller;
use App\Http\Controllers\kib_E_Controller;
use App\Http\Controllers\registController;
use App\Http\Controllers\rbi_Controller;


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
route::get('/kib-a/edit/{id}', [kib_A_Controller::class, 'edit'])->middleware('auth');
route::post('/kib-a/edit/{id}', [kib_A_Controller::class, 'update'])->middleware('auth');
route::get('/kib-a/search', [kib_A_Controller::class, 'search'])->middleware('auth');

route::get('/kib-b', [kib_B_Controller::class, 'index'])->middleware('auth');
route::get('/kib-b/insert', [kib_B_Controller::class, 'insert'])->middleware('auth');
route::post('/kib-b/insert', [kib_B_Controller::class, 'store'])->middleware('auth');
route::get('/kib-b/delete/{id}', [kib_B_Controller::class, 'delete'])->middleware('auth');
Route::get('/kib-b/more/{id}', [kib_B_Controller::class, 'more'])->middleware('auth');
route::get('/kib-b/edit/{id}', [kib_B_Controller::class, 'edit'])->middleware('auth');
route::post('/kib-b/edit/{id}', [kib_B_Controller::class, 'update'])->middleware('auth');
route::get('/kib-b/search', [kib_B_Controller::class, 'search'])->middleware('auth');

route::get('/kib-c', [kib_C_Controller::class, 'index'])->middleware('auth');
route::get('/kib-c/insert', [kib_C_Controller::class, 'insert'])->middleware('auth');
route::post('/kib-c/insert', [kib_C_Controller::class, 'store'])->middleware('auth');
route::get('/kib-c/delete/{id}', [kib_C_Controller::class, 'delete'])->middleware('auth');
Route::get('/kib-c/more/{id}', [kib_C_Controller::class, 'more'])->middleware('auth');
route::get('/kib-c/edit/{id}', [kib_C_Controller::class, 'edit'])->middleware('auth');
route::post('/kib-c/edit/{id}', [kib_C_Controller::class, 'update'])->middleware('auth');
route::get('/kib-c/search', [kib_C_Controller::class, 'search'])->middleware('auth');

route::get('/kib-e', [kib_E_Controller::class, 'index'])->middleware('auth');
route::get('/kib-e/insert', [kib_E_Controller::class, 'insert'])->middleware('auth');
route::post('/kib-e/insert', [kib_E_Controller::class, 'store'])->middleware('auth');
route::get('/kib-e/delete/{id}', [kib_E_Controller::class, 'delete'])->middleware('auth');
Route::get('/kib-e/more/{id}', [kib_E_Controller::class, 'more'])->middleware('auth');
route::get('/kib-e/edit/{id}', [kib_E_Controller::class, 'edit'])->middleware('auth');
route::post('/kib-e/edit/{id}', [kib_E_Controller::class, 'update'])->middleware('auth');
route::get('/kib-e/search', [kib_E_Controller::class, 'search'])->middleware('auth');

route::get('/regist', [registController::class, 'password'])->middleware('guest');
route::get('/registUser', [registController::class, 'index'])->middleware('guest');
route::post('/registUser', [registController::class, 'store']);






