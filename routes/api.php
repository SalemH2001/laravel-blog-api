<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('register', [RegisteredUserController::class, 'create']);
Route::group(['middleware'=>['auth']],function () {
    Route::apiResource('posts',PostController::class);
    Route::get('/posts/search/{name}',[PostController::class,'search']);

    Route::apiResource('categories',CategoryController::class);
    Route::get('/categories/search/{name}',[CategoryController::class,'search']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
