<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskoneController;
use App\Http\Controllers\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// first task
//first problem
Route::get('taskone/{first},{second}',[TaskoneController::class,'count']);
//second problem
Route::get('findindex/{chr}',[TaskoneController::class,'indexof']);
//last problem
Route::get('minstep/{chr1},{chr2}',[TaskoneController::class,'minstep']);
//Second Task
// user register & login
Route::post('regester',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);
Route::get('users',[UserController::class,'users']);
Route::get('users/{user}',[UserController::class,'view']);
Route::post('users/update/{user}',[UserController::class,'update']);
Route::delete('users/delete/{user}',[UserController::class,'destroy']);
