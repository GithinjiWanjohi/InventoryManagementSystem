<?php

use Illuminate\Http\Request;

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


Route::apiResource('/categories', 'CategoriesController');


Route::apiResource('/materials', 'MaterialsController');

//Route::group(['prefix'=>'categories'], function(){
//    Route::apiResource('/{materials}', 'CategoriesController');
//});

Route::apiResource('/places', 'PlaceController');

//Route::group(['prefix'=>'materials'], function(){
//    Route::apiResource('/{materials}/categories', 'CategoriesController');
//});


Route::apiResource('/transaction_ins', 'TransactionInController');


Route::apiResource('/transaction_outs', 'TransactionOutController');
