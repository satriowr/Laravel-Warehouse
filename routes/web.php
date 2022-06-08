<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\kib_A_Controller;
use App\Http\Controllers\kib_B_Controller;
use App\Http\Controllers\kib_C_Controller;
use App\Http\Controllers\kib_E_Controller;
use App\Http\Controllers\registController;
use App\Http\Controllers\kir_Controller;
use App\Http\Controllers\kir_HighTower_Controller;
use App\Http\Controllers\kir_Paseh_Controller;
use App\Http\Controllers\kir_Bizpark_Controller;
use App\Http\Controllers\kir_Kantor2_Controller;
use App\Http\Controllers\kir_KantorTengah1_Controller;
use App\Http\Controllers\kir_KantorPantry_Controller;
use App\Http\Controllers\kir_Lounge_Controller;
use App\Http\Controllers\kir_DirekturUtama_Controller;
use App\Http\Controllers\kir_DirekturOperasional_Controller;
use App\Http\Controllers\dashboard_Controller;


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

route::get('/kir', [kir_Controller::class, 'index'])->middleware('auth');

route::get('/kir/hightower', [kir_HighTower_Controller::class, 'index'])->middleware('auth');
route::get('/kir/hightower/insert', [kir_HighTower_Controller::class, 'insert'])->middleware('auth');
route::post('/kir/hightower/insert', [kir_HighTower_Controller::class, 'store'])->middleware('auth');
route::get('/kir/hightower/delete/{id}', [kir_HighTower_Controller::class, 'delete'])->middleware('auth');
Route::get('/kir/hightower/more/{id}', [kir_HighTower_Controller::class, 'more'])->middleware('auth');
route::get('/kir/hightower/search', [kir_HighTower_Controller::class, 'search'])->middleware('auth');

route::get('/kir/paseh', [kir_Paseh_Controller::class, 'index'])->middleware('auth');
route::get('/kir/paseh/insert', [kir_Paseh_Controller::class, 'insert'])->middleware('auth');
route::post('/kir/paseh/insert', [kir_Paseh_Controller::class, 'store'])->middleware('auth');
route::get('/kir/paseh/delete/{id}', [kir_Paseh_Controller::class, 'delete'])->middleware('auth');
Route::get('/kir/paseh/more/{id}', [kir_Paseh_Controller::class, 'more'])->middleware('auth');
route::get('/kir/paseh/search', [kir_Paseh_Controller::class, 'search'])->middleware('auth');

route::get('/kir/bizpark', [kir_Bizpark_Controller::class, 'index'])->middleware('auth');
route::get('/kir/bizpark/insert', [kir_Bizpark_Controller::class, 'insert'])->middleware('auth');
route::post('/kir/bizpark/insert', [kir_Bizpark_Controller::class, 'store'])->middleware('auth');
route::get('/kir/bizpark/delete/{id}', [kir_Bizpark_Controller::class, 'delete'])->middleware('auth');
Route::get('/kir/bizpark/more/{id}', [kir_Bizpark_Controller::class, 'more'])->middleware('auth');
route::get('/kir/bizpark/search', [kir_Bizpark_Controller::class, 'search'])->middleware('auth');

route::get('/kir/kantor2', [kir_Kantor2_Controller::class, 'index'])->middleware('auth');
route::get('/kir/kantor2/insert', [kir_Kantor2_Controller::class, 'insert'])->middleware('auth');
route::post('/kir/kantor2/insert', [kir_Kantor2_Controller::class, 'store'])->middleware('auth');
route::get('/kir/kantor2/delete/{id}', [kir_Kantor2_Controller::class, 'delete'])->middleware('auth');
Route::get('/kir/kantor2/more/{id}', [kir_Kantor2_Controller::class, 'more'])->middleware('auth');
route::get('/kir/kantor2/search', [kir_Kantor2_Controller::class, 'search'])->middleware('auth');

route::get('/kir/kantortengah1', [kir_KantorTengah1_Controller::class, 'index'])->middleware('auth');
route::get('/kir/kantortengah1/insert', [kir_KantorTengah1_Controller::class, 'insert'])->middleware('auth');
route::post('/kir/kantortengah1/insert', [kir_KantorTengah1_Controller::class, 'store'])->middleware('auth');
route::get('/kir/kantortengah1/delete/{id}', [kir_KantorTengah1_Controller::class, 'delete'])->middleware('auth');
Route::get('/kir/kantortengah1/more/{id}', [kir_KantorTengah1_Controller::class, 'more'])->middleware('auth');
route::get('/kir/kantortengah1/search', [kir_KantorTengah1_Controller::class, 'search'])->middleware('auth');

route::get('/kir/kantorpantry', [kir_KantorPantry_Controller::class, 'index'])->middleware('auth');
route::get('/kir/kantorpantry/insert', [kir_KantorPantry_Controller::class, 'insert'])->middleware('auth');
route::post('/kir/kantorpantry/insert', [kir_KantorPantry_Controller::class, 'store'])->middleware('auth');
route::get('/kir/kantorpantry/delete/{id}', [kir_KantorPantry_Controller::class, 'delete'])->middleware('auth');
Route::get('/kir/kantorpantry/more/{id}', [kir_KantorPantry_Controller::class, 'more'])->middleware('auth');
route::get('/kir/kantorpantry/search', [kir_KantorPantry_Controller::class, 'search'])->middleware('auth');

route::get('/kir/lounge', [kir_Lounge_Controller::class, 'index'])->middleware('auth');
route::get('/kir/lounge/insert', [kir_Lounge_Controller::class, 'insert'])->middleware('auth');
route::post('/kir/lounge/insert', [kir_Lounge_Controller::class, 'store'])->middleware('auth');
route::get('/kir/lounge/delete/{id}', [kir_Lounge_Controller::class, 'delete'])->middleware('auth');
Route::get('/kir/lounge/more/{id}', [kir_Lounge_Controller::class, 'more'])->middleware('auth');
route::get('/kir/lounge/search', [kir_Lounge_Controller::class, 'search'])->middleware('auth');

route::get('/kir/direkturutama', [kir_DirekturUtama_Controller::class, 'index'])->middleware('auth');
route::get('/kir/direkturutama/insert', [kir_DirekturUtama_Controller::class, 'insert'])->middleware('auth');
route::post('/kir/direkturutama/insert', [kir_DirekturUtama_Controller::class, 'store'])->middleware('auth');
route::get('/kir/direkturutama/delete/{id}', [kir_DirekturUtama_Controller::class, 'delete'])->middleware('auth');
Route::get('/kir/direkturutama/more/{id}', [kir_DirekturUtama_Controller::class, 'more'])->middleware('auth');
route::get('/kir/direkturutama/search', [kir_DirekturUtama_Controller::class, 'search'])->middleware('auth');

route::get('/kir/direkturoperasional', [kir_DirekturOperasional_Controller::class, 'index'])->middleware('auth');
route::get('/kir/direkturoperasional/insert', [kir_DirekturOperasional_Controller::class, 'insert'])->middleware('auth');
route::post('/kir/direkturoperasional/insert', [kir_DirekturOperasional_Controller::class, 'store'])->middleware('auth');
route::get('/kir/direkturoperasional/delete/{id}', [kir_DirekturOperasional_Controller::class, 'delete'])->middleware('auth');
Route::get('/kir/direkturoperasional/more/{id}', [kir_DirekturOperasional_Controller::class, 'more'])->middleware('auth');
route::get('/kir/direkturoperasional/search', [kir_DirekturOperasional_Controller::class, 'search'])->middleware('auth');

















