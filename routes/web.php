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

Route::get('/', function () {
    return view('welcome');
});

Route::get('blade', function () {
    return view('viewEngine');
});

//////////////client////////////

Route::group(['prefix' => 'hanUi'], function () {

    Route::get('home', [
        'uses' => 'HanController@index',
        'as' => 'hanUi.home'
    ]);
// home
    Route::get('',function(){
       return view('hanUi.home');
    })->name('hanUi.index');


    Route::get('category/{id_cate}',[
        'uses' => 'HanController@getproductsfromcate',
        'as' => 'hanUi.showproducts'
    ]);
    Route::get('category',[
        'uses' => 'HanController@listcate',
        'as' => 'hanUi.category'
    ]);
    //details

    Route::get('details/{id_p?}',[
        'uses' => 'HanController@showdetails',
        'as' => 'hanUi.details'
    ]);
    Route::get('show/{id_p}',[
        'uses' => 'HanController@show',
        'as' => 'hanUi.show'
    ]);

    Route::get('create',[
        'uses' => 'HanController@create',
        'as' => 'hanUi.create'
    ]);

    Route::post('create',[
        'uses' => 'HanController@storecustomer',
        'as' => 'hanUi.store'
    ]);

    Route::get('update/{id_p}',[
        'uses' => 'HanController@edit',
        'as' => 'hanUi.edit'
    ]);

    Route::post('update/{id_p}',[
        'uses' => 'HanController@update',
        'as' => 'hanUi.update'
    ]);

    Route::get('search/',[
        'uses' => 'HanController@search',
        'as' => 'hanUi.search'
    ]);
    Route::get('thanks',function(){
        return view('hanUi.thankyou');
    })->name('hanUi.thank');


});
////////////////Login Admin Handicraft////////////////////////////////////
///
Route::group(['prefix' => 'authHan'], function (){
    Route::get('login',[
        'uses' => 'ManualAuthHanController@ask',
        'as' => 'authHan.ask'
    ]);

    Route::post('login',[
        'uses' => 'ManualAuthHanController@signin',
        'as' => 'authHan.signin'
    ]);

    Route::get('logout',[
        'uses' => 'ManualAuthHanController@signout',
        'as' => 'authHan.signout'
    ]);
});
///////////handicraftRepos/////////////////////////

Route::group(
    ['prefix' => 'handicraftrepos', 'middleware' => ['manualHan.auth']],
    function () {

    Route::get('', [
        'uses' => 'HandicraftControllerWithRepos@index',
        'as' => 'handicraft.index'
    ]);

    Route::get('show/{id_p}',[
        'uses' => 'HandicraftControllerWithRepos@show',
        'as' => 'handicraft.show'
    ]);

    Route::get('create',[
        'uses' => 'HandicraftControllerWithRepos@create',
        'as' => 'handicraft.create'
    ]);

    Route::post('create',[
        'uses' => 'HandicraftControllerWithRepos@store',
        'as' => 'handicraft.store'
    ]);

    Route::get('update/{id_p}',[
        'uses' => 'HandicraftControllerWithRepos@edit',
        'as' => 'handicraft.edit'
    ]);

    Route::post('update/{id_p}',[
        'uses' => 'HandicraftControllerWithRepos@update',
        'as' => 'handicraft.update'
    ]);

    Route::get('delete/{id_p}', [
        'uses' => 'HandicraftControllerWithRepos@confirm',
        'as' => 'handicraft.confirm'
    ]);

    Route::post('delete/{id_p}',[
        'uses' => 'HandicraftControllerWithRepos@destroy',
        'as' => 'handicraft.destroy'
    ]);


});

/////////////admin///////////////////

Route::group(['prefix' => 'adminrepos', 'middleware' => ['manualHan.auth']], function () {
    Route::get('', [
        'uses' => 'AdminControllerWithRepos@index',
        'as' => 'admin.index'
    ]);

    Route::get('show/{id_a}',[
        'uses' => 'AdminControllerWithRepos@show',
        'as' => 'admin.show'
    ]);

    Route::get('update/{id_a}',[
        'uses' => 'AdminControllerWithRepos@edit',
        'as' => 'admin.edit'
    ]);

    Route::post('update/{id_a}',[
        'uses' => 'AdminControllerWithRepos@update',
        'as' => 'admin.update'
    ]);



});
///////////////Category////////////////////


Route::group(['prefix' => 'categoryrepos', 'middleware' => ['manualHan.auth']], function () {

    Route::get('', [
        'uses' => 'CategoryControllerWithRepos@index',
        'as' => 'category.index'
    ]);

    Route::get('show/{id_cate}',[
        'uses' => 'CategoryControllerWithRepos@show',
        'as' => 'category.show'
    ]);

    Route::get('create',[
        'uses' => 'CategoryControllerWithRepos@create',
        'as' => 'category.create'
    ]);

    Route::post('create',[
        'uses' => 'CategoryControllerWithRepos@store',
        'as' => 'category.store'
    ]);

    Route::get('update/{id_cate}',[
        'uses' => 'CategoryControllerWithRepos@edit',
        'as' => 'category.edit'
    ]);

    Route::post('update/{id_cate}',[
        'uses' => 'CategoryControllerWithRepos@update',
        'as' => 'category.update'
    ]);

    Route::get('delete/{id_cate}', [
        'uses' => 'CategoryControllerWithRepos@confirm',
        'as' => 'category.confirm'
    ]);

    Route::post('delete/{id_cate}',[
        'uses' => 'CategoryControllerWithRepos@destroy',
        'as' => 'category.destroy'
    ]);
});

////////////////////////Customer////////////////////////////////////
Route::group(['prefix' => 'customerrepos', 'middleware' => ['manualHan.auth']], function () {
    Route::get('', [
        'uses' => 'CustomerControllerWithRepos@index',
        'as' => 'customer.index'
    ]);

    Route::get('show/{id_c}',[
        'uses' => 'CustomerControllerWithRepos@show',
        'as' => 'customer.show'
    ]);

    Route::get('update/{id_c}',[
        'uses' => 'CustomerControllerWithRepos@edit',
        'as' => 'customer.edit'
    ]);

    Route::post('update/{id_c}',[
        'uses' => 'CustomerControllerWithRepos@update',
        'as' => 'customer.update'
    ]);

    Route::get('delete/{id_c}', [
        'uses' => 'CustomerControllerWithRepos@confirm',
        'as' => 'customer.confirm'
    ]);

    Route::post('delete/{id_c}',[
        'uses' => 'CustomerControllerWithRepos@destroy',
        'as' => 'customer.destroy'
    ]);
});


/////////////////////////////////////////////////

