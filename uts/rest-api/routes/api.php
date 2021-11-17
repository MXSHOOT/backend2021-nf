<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
# Import Patients Controller
use App\Http\Controllers\PatientsController;

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

# method get, endpoint patients
Route::get('/patients', [PatientsController::class, 'index']);

# method post, endpoint patients
Route::post('/patients', [PatientsController::class, 'store']);

# method get detail resource
Route::get('/patients/{id}', [PatientsController::class, 'show']);

# method put
Route::put('/patients/{id}', [PatientsController::class, 'update']);

# method delete
Route::delete('/patients/{id}', [AnimalController::class, 'destroy']);