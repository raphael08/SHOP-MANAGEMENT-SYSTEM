<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ApiController;
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

//Product API
Route::post('createProduct', [ApiController::class,'createProduct']);
Route::get('showProducts', [ApiController::class,'showProducts']);
Route::get('getProduct/{id}', [ApiController::class,'getProduct']);
Route::post('editProduct/{id}', [ApiController::class,'editProduct']);
Route::post('deleteProduct/{id}', [ApiController::class,'deleteProduct']);


//Branch API

Route::post('createBranch', [ApiController::class,'createBranch']);
Route::get('showBranches', [ApiController::class,'showBranches']);
Route::get('getBranch/{id}', [ApiController::class,'getBranch']);
Route::post('editBranch/{id}', [ApiController::class,'editBranch']);
Route::post('deleteBranch/{id}', [ApiController::class,'deleteBranch']);


//Sales API

Route::post('createSales', [ApiController::class,'createSales']);
Route::get('showSales', [ApiController::class,'showSales']);
Route::get('getSales/{id}', [ApiController::class,'getSales']);
Route::post('editSales/{id}', [ApiController::class,'editSales']);
Route::post('deleteSales/{id}', [ApiController::class,'deleteSales']);


//Stock API

Route::post('createStock', [ApiController::class,'createStock']);
Route::get('showStock', [ApiController::class,'showStock']);
Route::get('getStock/{id}', [ApiController::class,'getStock']);
Route::post('editStock/{id}', [ApiController::class,'editStock']);
Route::post('deleteStock/{id}', [ApiController::class,'deleteStock']);
