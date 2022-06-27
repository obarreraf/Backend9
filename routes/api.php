<?php

use App\Http\Controllers\V1\ProductsController;
use App\Http\Controllers\V1\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Api\AuthController;

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

//Route::resource('/customers',App\Http\Controllers\Api\V1\CustomersController::class);    

Route::prefix('v1')->group(function () {
    Route::post('login', [AuthController::class, 'authenticate']);
    Route::post('register', [AuthController::class, 'register']);
    Route::get('products/{id}', [ProductsController::class, 'show']);
    Route::group(['middleware' => ['jwt.verify']], function() {
        //This Group Requires Login Token.
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('get-user', [AuthController::class, 'getUser']);
        Route::get('products', [ProductsController::class, 'index']);
        Route::post('products', [ProductsController::class, 'store']);
        Route::put('products/{id}', [ProductsController::class, 'update']);
        Route::delete('products/{id}', [ProductsController::class, 'destroy']);
    });
});