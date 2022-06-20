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


Route::group(['prefix' => 'pie'], function () {
    Route::get('', function () {
        return view('pie.index');
    })->name('pie.index');

    Route::get('order', function () {
        return view('pie.order');
    })->name('pie.order');

    Route::get('allpies', function () {
        return view('pie.allpies');
    })->name('pie.allpies');

    Route::get('wood', function () {
        return view('pie.wood');
    })->name('pie.wood');

    Route::get('bamboo', function () {
        return view('pie.bamboo');
    })->name('pie.bamboo');

    Route::get('ceramic', function () {
        return view('pie.ceramic');
    })->name('pie.ceramic');

    Route::get('metal', function () {
        return view('pie.metal');
    })->name('pie.metal');

    Route::get('applepie', function () {
        return view('pie.applepie');
    })->name('pie.applepie');
});


////////////////////////
Route::get('bookworm', function () {
    return view('book.index');
});
Route::get('book', function(){
    return view('book.index');
})->name('book.index');
Route::get('testmain',function(){
    return view('book.testmain');
})->name('book.testmain');

Route::get('viewbook',function(){
    return view('book.viewbook');
})->name('book.viewbook');
Route::get('update', function(){
    return view('book.update');
})->name('book.update');


Route::get('newpublisher',function(){
    return view('book.viewpublisher');
})-> name('book.viewpublisher');
////////////////////////

Route::get('oddnumber', 'NumberController@oddNumber');
///////////////////BOOK//////////
//Route::group(['prefix' => 'book'], function () {
//
//    Route::get('', [
//        'uses' => 'BookSessionController@index',
//        'as' => 'book.index'
//        //as la name
//    ]);
//// C2:   Route::get('','BookSessionController@index')
////        ->name('book.index');
//
//        Route::get('create',[
//        'uses' => 'BookSessionController@create',
//        'as' => 'book.create'
//    ]);
//        Route::post('create',[
//            'uses' => 'BookSessionController@store',
//            'as' => 'book.store'
//        ]);
//        Route::get('update/{id}',[
//        'uses' => 'BookSessionController@edit',
//        'as' => 'book.edit'
//    ]);
//
//    Route::post('update/{id}',[
//        'uses' => 'BookSessionController@update',
//        'as' => 'book.update'
//    ]);
//
//    Route::get('delete/{id}', [
//        'uses' => 'BookSessionController@confirm',
//        'as' => 'book.confirm'
//    ]);
//
//    Route::post('delete/{id}', [
//        'uses' => 'BookSessionController@destroy',
//        'as' => 'book.destroy'
//    ]);
//
//
//});
///////////Book-Repos//////////////
Route::group(
    ['prefix' => 'bookrepos', 'middleware' => ['manual.auth']],
//   những  middleware nào áp dụng cho group này
    function () {
    Route::get('', [
        'uses' => 'BookControllerWithRepos@index',
        'as' => 'book.index'
    ]);

    Route::get('show/{id}',[
        'uses' => 'BookControllerWithRepos@show',
        'as' => 'book.show'
    ]);

    Route::get('create',[
        'uses' => 'BookControllerWithRepos@create',
        'as' => 'book.create'
    ]);

    Route::post('create',[
        'uses' => 'BookControllerWithRepos@store',
        'as' => 'book.store'
    ]);

    Route::get('update/{id}',[
        'uses' => 'BookControllerWithRepos@edit',
        'as' => 'book.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'BookControllerWithRepos@update',
        'as' => 'book.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'BookControllerWithRepos@confirm',
        'as' => 'book.confirm'
    ]);

    Route::post('delete/{id}',[
        'uses' => 'BookControllerWithRepos@destroy',
        'as' => 'book.destroy'
    ]);
});
///////////////////Auth//////////////////////////
Route::group(['prefix' => 'auth'], function (){
    Route::get('login',[
        'uses' => 'ManualAuthController@ask',
        'as' => 'auth.ask'
    ]);

    Route::post('login',[
        'uses' => 'ManualAuthController@signin',
        'as' => 'auth.signin'
    ]);

    Route::get('logout',[
        'uses' => 'ManualAuthController@signout',
        'as' => 'auth.signout'
    ]);
});

/// ////////////////////////////////////////////
/////////////Classroom//////////////////
//Route::group(['prefix' => 'class'], function () {
//
//    Route::get('', [
//        'uses' => 'ClassRoomController@index',
//        'as' => 'classRoom.index'
//        //as la name
//    ]);
//        Route::get('create',[
//        'uses' => 'ClassRoomController@create',
//        'as' => 'classRoom.create'
//    ]);
//    Route::post('create',[
//        'uses' => 'ClassRoomController@store',
//        'as' => 'classRoom.store'
//    ]);
//    Route::get('update/{id}',[
//        'uses' => 'ClassRoomController@edit',
//        'as' => 'classRoom.edit'
//    ]);
//
//    Route::post('update/{id}',[
//        'uses' => 'ClassRoomController@update',
//        'as' => 'classRoom.update'
//    ]);
//    Route::get('delete/{id}', [
//        'uses' => 'ClassRoomController@confirm',
//        'as' => 'classRoom.confirm'
//    ]);
//    Route::post('delete/{id}', [
//        'uses' => 'ClassRoomController@destroy',
//        'as' => 'classRoom.destroy'
//    ]);
//
//});

Route::group(['prefix' => 'classrepos'], function () {
    Route::get('', [
        'uses' => 'ClassControllerWithRepos@index',
        'as' => 'class.index'
    ]);

    Route::get('show/{id}',[
        'uses' => 'ClassControllerWithRepos@show',
        'as' => 'class.show'
    ]);

    Route::get('create',[
        'uses' => 'ClassControllerWithRepos@create',
        'as' => 'class.create'
    ]);

    Route::post('create',[
        'uses' => 'ClassControllerWithRepos@store',
        'as' => 'class.store'
    ]);

    Route::get('update/{id}',[
        'uses' => 'ClassControllerWithRepos@edit',
        'as' => 'class.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'ClassControllerWithRepos@update',
        'as' => 'class.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'ClassControllerWithRepos@confirm',
        'as' => 'class.confirm'
    ]);

    Route::post('delete/{id}',[
        'uses' => 'ClassControllerWithRepos@destroy',
        'as' => 'class.destroy'
    ]);
});
///////Teacher/////////////
//Route::group(['prefix' => 'teacher'], function () {
//
//    Route::get('', [
//        'uses' => 'TeacherManager@index',
//        'as' => 'teacherManager.index'
//        //as la name
//    ]);
//    Route::get('create',[
//        'uses' => 'TeacherManager@create',
//        'as' => 'teacherManager.create'
//    ]);
//        Route::post('create',[
//            'uses' => 'TeacherManager@store',
//            'as' => 'teacherManager.store'
//        ]);
//
//        Route::get('update/{id}',[
//        'uses' => 'TeacherManager@edit',
//        'as' => 'teacherManager.edit'
//    ]);
//
//    Route::post('update/{id}',[
//        'uses' => 'TeacherManager@update',
//        'as' => 'teacherManager.update'
//    ]);
//    Route::get('delete/{id}', [
//        'uses' => 'TeacherManager@confirm',
//        'as' => 'teacherManager.confirm'
//    ]);
//    Route::post('delete/{id}', [
//        'uses' => 'TeacherManager@destroy',
//        'as' => 'teacherManager.destroy'
//    ]);
//
//});
Route::group(['prefix' => 'teacherrepos'], function () {
    Route::get('', [
        'uses' => 'TeacherControllerWithRepos@index',
        'as' => 'teacher.index'
    ]);

    Route::get('show/{id}',[
        'uses' => 'TeacherControllerWithRepos@show',
        'as' => 'teacher.show'
    ]);

    Route::get('create',[
        'uses' => 'TeacherControllerWithRepos@create',
        'as' => 'teacher.create'
    ]);

    Route::post('create',[
        'uses' => 'TeacherControllerWithRepos@store',
        'as' => 'teacher.store'
    ]);

    Route::get('update/{id}',[
        'uses' => 'TeacherControllerWithRepos@edit',
        'as' => 'teacher.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'TeacherControllerWithRepos@update',
        'as' => 'teacher.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'TeacherControllerWithRepos@confirm',
        'as' => 'teacher.confirm'
    ]);

    Route::post('delete/{id}',[
        'uses' => 'TeacherControllerWithRepos@destroy',
        'as' => 'teacher.destroy'
    ]);
});


//////////student/////////////////////////
//Route::group(['prefix' => 'student'], function () {
//    Route::get('', [
//        'uses' => 'StudentController@index',
//        'as' => 'studentManager.index'
//        //as la name
//    ]);
//
//    Route::get('create',[
//        'uses' => 'StudentController@create',
//        'as' => 'studentManager.create'
//    ]);
//
//    Route::post('create',[
//        'uses' => 'StudentController@store',
//        'as' => 'studentManager.store'
//    ]);
//        Route::get('update/{id}',[// Tham số có tên là id
//        'uses' => 'StudentController@edit',
//        'as' => 'studentManager.edit'
//    ]);
//
//    Route::post('update/{id}',[
//        'uses' => 'StudentController@update',
//        'as' => 'studentManager.update'
//    ]);
//
//    Route::get('delete/{id}', [
//        'uses' => 'StudentController@confirm',
//        'as' => 'studentManager.confirm'
//    ]);
//    Route::post('delete/{id}', [
//        'uses' => 'StudentController@destroy',
//        'as' => 'studentManager.destroy'
//    ]);
//
//});

Route::group(['prefix' => 'studentrepos'], function () {
    Route::get('', [
        'uses' => 'StudentControllerWithRepos@index',
        'as' => 'student.index'
    ]);

    Route::get('show/{id}',[
        'uses' => 'StudentControllerWithRepos@show',
        'as' => 'student.show'
    ]);

    Route::get('create',[
        'uses' => 'StudentControllerWithRepos@create',
        'as' => 'student.create'
    ]);

    Route::post('create',[
        'uses' => 'StudentControllerWithRepos@store',
        'as' => 'student.store'
    ]);

    Route::get('update/{id}',[
        'uses' => 'StudentControllerWithRepos@edit',
        'as' => 'student.edit'
    ]);

    Route::post('update/{id}',[
        'uses' => 'StudentControllerWithRepos@update',
        'as' => 'student.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'StudentControllerWithRepos@confirm',
        'as' => 'student.confirm'
    ]);

    Route::post('delete/{id}',[
        'uses' => 'StudentControllerWithRepos@destroy',
        'as' => 'student.destroy'
    ]);
});




//////////test////////




///////////Handicraft////////

Route::group(['prefix' => 'handicraft'], function () {
    Route::get('', function () {
        return view('handicraft.index');
    })->name('home.index');


    Route::get('home', function () {
        return view('handicraft.home');
    })->name('handicraft.home');

    Route::get('order', function () {
        return view('handicraft.order');
    })->name('handicraft.order');

    Route::get('allhandicraft', function () {
        return view('handicraft.allhandicraft');
    })->name('handicraft.allhandicraft');

    Route::get('wood', function () {
        return view('handicraft.wood');
    })->name('handicraft.wood');

    Route::get('bamboo', function () {
        return view('handicraft.bamboo');
    })->name('handicraft.bamboo');

    Route::get('ceramic', function () {
        return view('handicraft.ceramic');
    })->name('handicraft.ceramic');

    Route::get('metal', function () {
        return view('handicraft.metal');
    })->name('handicraft.metal');

    Route::get('applepie', function () {
        return view('handicraft.applepie');
    })->name('handicraft.applepie');
});

//////////////client////////////

Route::group(['prefix' => 'hanUi'], function () {

    Route::get('', [
        'uses' => 'HanController@index',
        'as' => 'hanUi.index'
    ]);
// home
    Route::get('home',function(){
       return view('hanUi.home') ;

    })->name('hanUi.home');

    Route::get('create',[
        'uses' => 'HanController@create',
        'as' => 'hanUi.create'
    ]);
    //details
    Route::get('details',function (){
        return view('hanUi.details');
    })->name('hanUi.details');

    Route::get('show/{id_p}',[
        'uses' => 'HanController@show',
        'as' => 'hanUi.show'
    ]);

    Route::get('create',[
        'uses' => 'HanController@create',
        'as' => 'hanUi.create'
    ]);

    Route::post('create',[
        'uses' => 'HanController@store',
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

    Route::get('delete/{id_p}', [
        'uses' => 'HanController@confirm',
        'as' => 'hanUi.confirm'
    ]);

    Route::post('delete/{id_p}',[
        'uses' => 'HanController@destroy',
        'as' => 'hanUi.destroy'
    ]);

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

Route::group(['prefix' => 'adminrepos'], function () {
    Route::get('', [
        'uses' => 'AdminControllerWithRepos@index',
        'as' => 'admin.index'
    ]);

    Route::get('show/{id_a}',[
        'uses' => 'AdminControllerWithRepos@show',
        'as' => 'admin.show'
    ]);

    Route::get('create',[
        'uses' => 'AdminControllerWithRepos@create',
        'as' => 'admin.create'
    ]);

    Route::post('create',[
        'uses' => 'AdminControllerWithRepos@store',
        'as' => 'admin.store'
    ]);

    Route::get('update/{id_a}',[
        'uses' => 'AdminControllerWithRepos@edit',
        'as' => 'admin.edit'
    ]);

    Route::post('update/{id_a}',[
        'uses' => 'AdminControllerWithRepos@update',
        'as' => 'admin.update'
    ]);

    Route::get('delete/{id_a}', [
        'uses' => 'AdminControllerWithRepos@confirm',
        'as' => 'admin.confirm'
    ]);

    Route::post('delete/{id_a}',[
        'uses' => 'AdminControllerWithRepos@destroy',
        'as' => 'admin.destroy'
    ]);


    Route::get('password/{id_a}',[
        'uses' => 'AdminControllerWithRepos@pass',
        'as' => 'admin.pass'
    ]);



});
///////////////Category////////////////////


Route::group(['prefix' => 'categoryrepos'], function () {

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
Route::group(['prefix' => 'customerrepos'], function () {
    Route::get('', [
        'uses' => 'CustomerControllerWithRepos@index',
        'as' => 'customer.index'
    ]);

    Route::get('show/{id_c}',[
        'uses' => 'CustomerControllerWithRepos@show',
        'as' => 'customer.show'
    ]);

    Route::get('create',[
        'uses' => 'CustomerControllerWithRepos@create',
        'as' => 'customer.create'
    ]);

    Route::post('create',[
        'uses' => 'CustomerControllerWithRepos@store',
        'as' => 'customer.store'
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

//////////////////////////////Mới Handicraft////////////////////////////////
Route::group(['prefix'=>'han'],function(){
    Route::get('',function(){
        return view('han.index');
    })->name('han.index');
    Route::get('menu',function(){
       return view('han.menu');
    })->name('han.menu');
    Route::get('customer',function (){
       return view('han.customer');
    })->name('han.customer');
    Route::get('details',function (){
        return view('han.details');
    })->name('han.details');


    Route::get('applepie', function () {
        return view('han.applepie');
    })->name('han.applepie');

});

////////////////////////////////////////////////////////////
Route::group(['prefix' => 'handicraft'], function () {
    Route::get('', function () {
        return view('handicraft.index');
    })->name('home.index');

    Route::get('home', function () {
        return view('handicraft.home');
    })->name('handicraft.home');

    Route::get('order', function () {
        return view('handicraft.order');
    })->name('handicraft.order');

    Route::get('allhandicraft', function () {
        return view('handicraft.allhandicraft');
    })->name('handicraft.allhandicraft');

    Route::get('wood', function () {
        return view('handicraft.wood');
    })->name('handicraft.wood');

    Route::get('bamboo', function () {
        return view('handicraft.bamboo');
    })->name('handicraft.bamboo');

    Route::get('ceramic', function () {
        return view('handicraft.ceramic');
    })->name('handicraft.ceramic');

    Route::get('metal', function () {
        return view('handicraft.metal');
    })->name('handicraft.metal');

    Route::get('applepie', function () {
        return view('handicraft.applepie');
    })->name('handicraft.applepie');

});



