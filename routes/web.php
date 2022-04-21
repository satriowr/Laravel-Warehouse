<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;


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



route::get('/login', [LoginController::class, 'index'])->name("login")->middleware('guest');
route::post('/login', [LoginController::class, 'auth']);

route::get('/', [DashboardController::class, 'index'])->middleware('auth');
route::get('/logout', [LoginController::class, 'logout']);

