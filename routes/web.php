<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('', [
        'uses' => 'AdminController@index',
        'as' => 'admin.index'
    ]);

    Route::get('show/{id}',[
        'uses' => 'AdminController@show',
        'as' => 'admin.show'
    ]);

    Route::get('create',[
        'uses' => 'AdminController@create',
        'as' => 'admin.create'
    ]);

    Route::post('create',[
        'uses' => 'AdminController@store',
        'as' => 'admin.store'
    ]);

    Route::get('update/{id}',[
        'uses' => 'AdminController@edit',
        'as' => 'admin.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'AdminController@update',
        'as' => 'admin.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'AdminController@confirm',
        'as' => 'admin.confirm'
    ]);

    Route::post('delete/{id}',[
        'uses' => 'AdminController@destroy',
        'as' => 'admin.destroy'
    ]);
});
