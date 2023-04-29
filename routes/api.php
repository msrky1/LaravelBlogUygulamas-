<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;


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





// Route::get('/bloglarim' , [BlogController::class, 'show']);
Route::get('/user/blog/{id}' , [BlogController::class, 'show']);
Route::get('/all/blog' , [BlogController::class, 'allblog']);



Route::put('/update/{id}' , [BlogController::class, 'update']);
Route::put('/user/{id}' , [UserController::class, 'update']);
Route::delete('/delete/{id}' , [BlogController::class, 'delete']);


Route::get('/user' , [UserController::class, 'show']);