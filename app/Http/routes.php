<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('product/{id}', 'ProductsController@showGate');
Route::get('productauth/{id}', 'ProductsAuthController@showAuth');
Route::get('productauthorize/{id}', 'ProductAuthorizeController@showAuthorize');

Route::get('productpolicy/{id}', 'ProductPolicyController@showPolicy');
Route::get('productGatepolicy/{id}', 'ProductPolicyGateController@showGatePolicy');
Route::get('productAuthpolicy/{id}', 'ProductPolicyAuthController@showAuthPolicy');

Route::get('permissionpolicy/{id}', 'PermissionPolicyController@showPermissionPolicy');


Route::get('/', function () {
    return view('welcome');
});
