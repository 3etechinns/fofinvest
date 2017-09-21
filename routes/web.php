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


Route::get('/', function () {
    return view('navbar.home');
});
Route::get('/home', function () {
    return view('navbar.home');
});

Route::get('/about', function () {
    return view('navbar.about');
});

Route::get('/investment', function () {
    return view('navbar.investment');
});

Route::get('/faq', function () {
    return view('navbar.faq');
});


Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('/account', function () {
        return view('pages.account');
    });

    Route::get('/mypackage', function () {
        return view('pages.mypackage');
    });

    Route::get('/buypackage', function () {
        return view('pages.buypackage');
    });

    Route::get('/earnings', function () {
        return view('pages.earnings');
    });

    //Admin
    Route::prefix('admin')->group(function () {
        Route::get('/users', function () {
            return view('pages.admin.users');
        });

        Route::get('/groups', function () {
            return view('pages.admin.groups');
        });
        Route::get('/deposit_methods', function () {
            return view('pages.admin.deposit_methods');
        });        
    });


    //Deposits Section
    Route::get('/deposits', function () {
        return view('pages.deposits.deposits');
    });

    Route::get('/deposits/cashin', function () {
        return view('pages.deposits.cashin');
    });

    Route::get('/withdrawals', function () {
        return view('pages.withdrawals');
    });

    Route::get('/profile', function () {
        return view('pages.profile');
    });

    Route::get('/settings', function () {
        return view('pages.settings');
    });
});

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
