<?php

use App\Domain\User\Controller\UserController;
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

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('user/me', [UserController::class, 'me']);

//    Route::post('user', [UserController::class, 'create']);
    Route::patch('user', [UserController::class, 'update']);
    Route::get('user/{id}', [UserController::class, 'get']);
    Route::delete('user/{id}', [UserController::class, 'delete']);
});

Route::group(['middleware' => ['guest']], function () {
    Route::post('user', [UserController::class, 'create']);
    Route::post('auth', [UserController::class, 'auth']);
});
