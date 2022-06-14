<?php

use Illuminate\Support\Facades\Route;

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


//////////pie/////////////////

Route::get('/', function () {
    return view('welcome');
});
Route::get('blade', function () {
    return view('viewEngine');
});

Route::group(['prefix' => 'pie'], function (){
    Route::get('', function () {
        return view('pie.index');
    })->name('pie.index');

    Route::get('order', function () {
        return view('pie.order');
    })->name('pie.order');

    Route::get('allpies', function () {
        return view('pie.allpies');
    })->name('pie.allpies');

    Route::get('applepie', function () {
        return view('pie.applepie');
    })->name('pie.applepie');
});





////////////////////////////////Handi///////////////////////////
 Route::group(['prefix' => 'handireposs'], function () {
    Route::get('', [
        'uses' => 'HandiControllerRepos@index',
        'as' => 'handi.index'
    ]);

    Route::get('show/{id}',[
        'uses' => 'HandiControllerRepos@show',
        'as' => 'handi.show'
    ]);

    Route::get('create',[
        'uses' => 'HandiControllerRepos@create',
        'as' => 'handi.create'
    ]);

    Route::post('create',[
        'uses' => 'HandiControllerRepos@store',
        'as' => 'handi.store'
    ]);

    Route::get('update/{id}',[
        'uses' => 'HandiControllerRepos@edit',
        'as' => 'handi.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'HandiControllerRepos@update',
        'as' => 'handi.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'HandiControllerRepos@confirm',
        'as' => 'handi.confirm'
    ]);

    Route::post('delete/{id}',[
        'uses' => 'HandiControllerRepos@destroy',
        'as' => 'handi.destroy'
    ]);
});
