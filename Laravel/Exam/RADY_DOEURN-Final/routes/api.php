<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\StudentController;
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

Route::get('/books/list',[BookController::class,'index'])->name('book.index');
Route::post('/book/create',[BookController::class,'store'])->name('book.store');
Route::put('/book/update/{id}',[BookController::class,'update'])->name('book.update');
Route::delete('/book/delete/{id}',[BookController::class,'destroy'])->name('book.destroy');

Route::get('/students/list',[StudentController::class,'index'])->name('student.index');
Route::post('/student/create',[StudentController::class,'store'])->name('student.store');
Route::put('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::delete('/student/delete/{id}',[StudentController::class,'destroy'])->name('student.destroy');