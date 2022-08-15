<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Model\User;



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

// Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return response()->json([
        ]);
    });

    Route::post('/list-user', [UsersController::class, 'show']);

// });

// Route::get('/list-user', [UsersController::class, 'show']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     dd($request); return $request->user();
// });
