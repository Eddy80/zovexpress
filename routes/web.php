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

Route::get('/relogin', function () {
    return view('relogin');
});

Route::get('/infotracking',  'GeneralController@getPageInfoTracking');

Route::get('/infosending',  'GeneralController@getPageInfoSending');

Route::get('/infoagreement', 'GeneralController@getPageAgreement');

Route::get('/forbidden',  'GeneralController@getPageInfoForbidden');
/*
Route::get('/about', function () {
    return view('about');
});
*/
Route::get('/about', 'GeneralController@getPageAbout');

Route::get('/underconstruction', 'GeneralController@getPageUnder');

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contactform', 'GeneralController@addressstore');

Route::get('/tasco',  'GeneralController@getPageTasco');

//////////// INVOICE /////////////////////////////////////////////////
Route::get('/invoicenew', function () {
    return view('invoice');
});

Route::post('/invoices', 'InvoiceController@store')->name('invoices');
Route::get('/invoiceslist', function () {
    return view('invoicelist');
});
//////////// COURIER /////////////////////////////////////////////////
Route::get('/couriernew', function () {
    return view('courier');
});

Route::post('/couriers', 'KuryerController@store')->name('couriers');
Route::get('/courierslist', function () {
    return view('courierlist');
});
//////////// USER FAVORITES /////////////////////////////////////////////////
Route::get('/userfavoritenew', function () {
    return view('userfavorites');
});

Route::post('/userfavorites', 'UserFavoriteController@store');
Route::get('/userfavoriteslist', function () {
    return view('userfavoriteslist');
});
//////////// SHOP /////////////////////////////////////////////////
Route::get('/shops', function () {
    return view('shops');
});
//////////// BRANCH /////////////////////////////////////////////////
Route::get('/branchs', function () {
    return view('branchs');
});
//////////// Tarrifs /////////////////////////////////////////////////
Route::get('/tarrifs', function () {
    return view('tarrifs');
});
//////////// Address for Fill /////////////////////////////////////////////////
Route::get('/addressfill', function () {
    return view('addressfill');
});
//////////// Bonus card /////////////////////////////////////////////////
Route::get('/bonuscard', function () {
    return view('bonuscard');
});
//////////// Search Tovar /////////////////////////////////////////////////
Route::get('/searcht', function () {
    return view('searchtovar');
});

Route::get('/searcht2', function () {
    return view('searchtovar2');
});

//*********************TASCO SHOP******************************************** */
Route::get('/tascohome', 'GoodController@getList');

Route::get('/tascohomepaginate', 'GoodController@getListPaginated');

Route::get('/tascohomecatidpaginate/{catid}', 'GoodController@getListCatidPaginated');

Route::get('/tascohome/{catid}', 'GoodController@index');

Route::get('/tascogood/{goodid}','GoodController@viewGood');
//********************************************************************/

Route::get('/calculate', 'PriceController@calculate');

Route::get('/getreceivecountryiesbysendercountryid', 'PriceController@getRcByScId');


Route::get('/usercode', 'TrackingsController@getusercode');

//Route::get('/usercode', 'TrackingsController@saveusercode');

Route::get('/countryinfo', 'TrackingsController@getCountryInfo');
Route::get('/countryinfolist', 'TrackingsController@getCountryInfoByCountryId');


Route::post('/checkpromocode','PromocodController@getpercent');


Route::post('/reg','Auth\RegisterController@create');
Route::post('/regsimple','Auth\RegisterController@createsimple');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/relogin','Auth\LoginController@relogin')->name('relogin');
Route::get('/logout','Auth\LoginController@logout');



Route::group([
    'middleware'=>'member'
], function(){


    Route::post('/usercodesave', 'TrackingsController@setusercode');

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



    //  Maqazin:
    
     Route::get('/cabaddshop', 'GoodShopController@create');

    Route::post('/cabaddshop','GoodShopController@store');

    // Tovari
    Route::get('/cabaddgoods', function () {
        return view('cabaddgoods');
    });

    Route::post('/cabaddgoods','GoodController@storemydata');


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

    

    Route::get('/pricelist', function () {
        return view('root.pricelist');
    });
/*
    Route::get('/nousers', function () {
        return view('root.nousers');
    });*/

    Route::get('/comments', function () {
        return view('root.comments');
    });

    Route::get('/contacts', 'GeneralController@pageaddressload');

    Route::get('/links', 'GeneralController@pagelinksload');




    Route::get('/tracklist', function () {
        return view('root.tracklist');
    });


    Route::get('/addtrack', function () {
        return view('root.addtrack');
    });
    Route::post('/addtrack', 'TrackingsController@trackstore');

    Route::get('/usercodelist', 'CodesController@getListByUserId2');

    Route::get('/userbycode', 'CodesController@getUserIdByCodeId');

    Route::get('/admins', function () {
        return view('root.admins');
    });

    Route::get('/admin/pages/{pageid}', 'GeneralController@pageload');
    Route::post('/pages', 'GeneralController@pagestore');

    Route::get('/admin/users/{id}','UsersController@viewmember');



    Route::post('/makeadmin', 'UsersController@adminuser');





    Route::get('/otpravkalist', function () {
        return view('root.otpravkalist');
    });
    Route::get('/addotpravka', function () {
        return view('root.addotpravka');
    });
    Route::post('/addotpravka', 'OtpravkaController@store');
    Route::get('/admin/otpravkalist/{id}','OtpravkaController@viewforeditotpravka');
    Route::post('/updateotpravka', 'OtpravkaController@update');

    Route::get('/admininvoicelist', function () {
        return view('root.invoicelist');
    });
    Route::get('/admin/invoicelist/{id}','InvoiceController@viewforeditinvoice');
    Route::post('/updateinvoice', 'InvoiceController@update');
});
