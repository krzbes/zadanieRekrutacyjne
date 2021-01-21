<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/name/{id}', [NameController::class, 'showName']);
Route::get('/name', [NameController::class, 'showNames']);
Route::post('/name/{name}', [NameController::class, 'addName']);

Route::middleware(['auth:api', 'verified'])->group(function () {
    
});