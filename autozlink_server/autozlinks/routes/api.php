<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\PostCarsController;
use App\Http\Controllers\CarBrandsController;
use App\Http\Controllers\CarModelsController;
use App\Http\Controllers\CarCategorysController;
use App\Http\Controllers\CarFuelTypesController;
use App\Http\Controllers\CarConditionsController;
use App\Http\Controllers\PostCarsFavoritesController;

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
Route::middleware('auth:api')->prefix('v1')->group(function() {
    // Route::get('/user', function(Request $request){
    //     return $request->user();
    // });

    Route::apiResource('/sliders', SlidersController::class);
    Route::apiResource('/carCategorys', CarCategorysController::class);

    Route::apiResource('/postCars', PostCarsController::class);
    Route::apiResource('/postCarsFavorites', PostCarsFavoritesController::class);

    Route::apiResource('/carBrands', CarBrandsController::class);
    Route::apiResource('/carConditions', CarConditionsController::class);
    Route::apiResource('/carFuelTypes', CarFuelTypesController::class);
    Route::apiResource('/carModels', CarModelsController::class);
});

// Route::post('/login', [AccessTokenController::class, 'issueToken'])->middleware(['api-login', 'throttle']);

