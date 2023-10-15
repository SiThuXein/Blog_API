<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categories',[CategoriesController::class,'index']);
Route::get('categories/{id}',[CategoriesController::class,'show']);
Route::post('categories',[CategoriesController::class,'store']);


Route::get('posts',[PostsController::class,'index']);
Route::get('posts/{id}',[PostsController::class,'show']);
Route::get('posts/categories/{id}',[PostsController::class,'filter']);
Route::post('posts',[PostsController::class,'store']);