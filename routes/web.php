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
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});



Route::get('/infotracking', function () {
    return view('infotracking');
});

Route::get('/infosending', function () {
    return view('infosending');
});

Route::get('/infoagreement', function () {
    return view('infoagreement');
});

Route::get('/forbidden', function () {
    return view('forbidden');
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/tasco', function () {
    return view('tasco');
});







Route::post('/reg','Auth\RegisterController@create');
Route::post('/login','Auth\LoginController@login');
Route::get('/logout','Auth\LoginController@logout');



Route::group([
    'middleware'=>'member'
], function(){


    Route::get('/cab', function () {
        return view('cab');
    });

    Route::get('/cabedit', function () {
        return view('cabedit');
    });

    Route::post('/cabedit','UsersController@storemydata');

    Route::get('/cabpassword', function () {
        return view('cabpass');
    });

    Route::post('/cabpassword','UsersController@changemypassword');


    Route::get('/cabcodelist', function () {
        return view('cabcodelist');
    });

    Route::get('/cabtracking', function () {
        return view('cabtracking');
    });

    Route::get('/cabgettrackings','TrackingsController@getListByCodeIdAndUserId');

    /*Route::get('/cabgettrackings', function () {
        return view('trackinglist');
    });*/
/*
    Route::post('/cabgettrackings',[
        'uses' => 'TrackingsController@getListByCodeIdAndUserId'
    ])->name('getListByCodeIdAndUserId');
*/
    Route::get('/cabhistory', function () {
        return view('cabhistory');
    });


    Route::get('/tracking', function () {
        return view('tracking');
    });

    Route::get('/calculate', 'PriceController@calculate');

    Route::get('/usercode', 'TrackingsController@getusercode');
    //Route::get('/usercode', 'TrackingsController@saveusercode');

});
