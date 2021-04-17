<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
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

// Route::post('add', 'App\Http\Controllers\CaculatorController@add');

Route::post('add', [CalculatorController::class, 'add']);
// Route::post('subtract', CalculatorController::class, 'subtract');
// Route::post('multiply', CalculatorController::class, 'multiply');
// Route::post('division', CalculatorController::class, 'division');
