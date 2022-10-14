<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultsController;

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

Route::post('/new-score', [ResultsController::class, 'add_score']);

Route::get('/all-score', [ResultsController::class, 'all_score']);

Route::get('/clear-scores', [ResultsController::class, 'clear_all']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
