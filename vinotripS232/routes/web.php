<?php

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


use App\Http\Controllers\IndexController;

Route::get("/nos-sejours", [IndexController::class, "destination"]);
Route::get("/nos-sejours", [IndexController::class, "categorie_participant"]);
Route::get("/nos-sejours", [IndexController::class, "sejour"]);
Route::get("/", [IndexController::class, "index"]);
Route::get("/client", [IndexController::class, 'client']);
Route::get("/register", [IndexController::class, 'register']);
Route::post("/register", [IndexController::class, 'register']);
Route::get("/sejour", [IndexController::class, 'unSejour']);
Route::get("/route-des-vins", [IndexController::class, 'route_des_vins']);



