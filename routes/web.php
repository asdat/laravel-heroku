<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{url?}', function ($url = '') {
	echo $request = 'https://u-vey-dev-ui.herokuapp.com/'.$url;
    return file_get_contents($request);
})->where('url', '(about|signin|signup|timeline|)');

Route::prefix('api')->group(function () {
    Route::get('{url?}', function ($url = '') {
    	echo $request = 'https://u-vey-dev-api.herokuapp.com/api/'.$url;
        return file_get_contents($request);
    });
});
