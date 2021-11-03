<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
# Import Animal Controller
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;

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

# Get All Reource
Route::get("/students", [StudentController::class, 'index']);

# Add Resource
Route::post("/students", [StudentController::class, 'store']);

# Get Detail Resource
Route::get("/students/{id}", [StudentController::class, 'show']);

# Update resource
Route::put("/students/{id}", [StudentController::class, 'update']);

# Delete reource
Route::delete("/students/{id}", [StudentController::class, 'destroy']);