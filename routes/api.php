<?php

use Illuminate\Http\Request;
Use App\Buyer;


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

Route::get('farmer', 'FarmerController@index');
Route::get('farmer/{id}', 'FarmerController@show');
Route::post('farmer', 'FarmerController@store');
Route::post('farmerlogin', 'FarmerController@login');
Route::put('farmer/{api_token}/{id}', 'FarmerController@update')->middleware('api_token');
Route::delete('farmer/{id}', 'FarmerController@delete');

Route::get('buyer', 'BuyerController@index');
Route::get('buyer/{id}', 'BuyerController@show');
Route::post('buyer', 'BuyerController@store');
Route::put('buyer/{id}', 'BuyerController@update');
Route::delete('buyer/{id}', 'BuyerController@delete');

Route::get('produce', 'ProduceController@index');
Route::get('produce/{id}', 'ProduceController@show');
Route::post('produce', 'ProduceController@store');
Route::put('produce/{id}', 'ProduceController@update');
Route::delete('produce/{id}', 'ProduceController@delete');

Route::get('quality', 'ProduceQualityController@index');
Route::get('quality/{id}', 'ProduceQualityController@show');
Route::post('quality', 'ProduceQualityController@store');
// Route::put('quality/{id}', 'ProduceQualityController@update');
// Route::delete('quality/{id}', 'ProduceQualityController@delete');

Route::get('wallet', 'WalletController@index');
Route::get('wallet/{id}', 'WalletController@show');
Route::post('wallet', 'WalletController@store');
Route::put('wallet/{id}', 'WalletController@update');
Route::delete('wallet/{id}', 'WalletController@delete');