<?php

use App\Http\Controllers\Api\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('customer/list', [CustomerController::class,"index"]);
Route::post('customer/create', [CustomerController::class,"store"]);
Route::get('customer/show/{id}', [CustomerController::class,"show"]);
Route::put('customer/update/{id}', [CustomerController::class,"update"]);
Route::delete('customer/delete/{id}', [CustomerController::class,"destroy"]);
