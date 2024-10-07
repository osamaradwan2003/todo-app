<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(TaskController::class)->group(function () {
    Route::post("tasks", "create");
    Route::get("tasks", "index");
    Route::put("tasks/{id}", "update")->where(['id' => '[\d+]']);
    Route::delete("tasks/{id}", "delete")->where(['id' => '[\d+]']);
});
