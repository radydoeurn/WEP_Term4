<?php

use App\Http\Controllers\PostController;
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

Route::get('/posts/list', [PostController::class, 'index'])->name('posts.;list');
Route::post('/post/create', [PostController::class, 'store'])->name('post.create');
Route::get('/post/show/{id}', [PostController::class, 'show'])->name('post.show');
Route::delete('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');
Route::put('/post/update/{id}', [PostController::class, 'update'])->name('post.update');