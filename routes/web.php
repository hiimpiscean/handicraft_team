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


//////////Handicraf/////////////////

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
