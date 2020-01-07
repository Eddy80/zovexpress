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

Route::get('/about', function () {
    return view('about');
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

    Route::get('/cabgetsamolet','TrackingsController@getSamoletByTrackNumber');

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

Route::group([
    'middleware'=>'admin'
], function() {

    Route::get('/admin', function () {
        return view('root.home');
    });

    Route::get('/users', function () {
        return view('root.users');
    });

    Route::get('/nousers', function () {
        return view('root.nousers');
    });

    Route::get('/comments', function () {
        return view('root.comments');
    });

    Route::get('/addtrack', function () {
        return view('root.addtrack');
    });

    Route::get('/usercodelist', 'CodesController@getListByUserId2');

    Route::get('/admins', function () {
        return view('root.admins');
    });

    Route::get('/admin/pages/{pageid}', 'GeneralController@pageload');
    Route::post('/pages', 'GeneralController@pagestore');

    Route::get('/admin/users/{id}','UsersController@viewmember');
});
