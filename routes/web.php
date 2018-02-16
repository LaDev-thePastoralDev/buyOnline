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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/phones','PhonesController');

Route::get('/phonesNotInStock','PhonesController@notInStock')->name('phones.notInStock');


Route::post('/add-to-cart','cartController@addCart')->name('add-to-cart');
Route::get('/showCart','cartController@index')->name('carts.index');


Route::get('/order-history','cartController@orderHistory')->name('orders.history');



Route::get('/showUser','userController@showUser')->name('show-user');


//Route::get('/roles','rolesController@index')->name('roles.index');


Route::middleware('role:ROLE_ADMIN')->prefix('admin')->group(function (){
    Route::get('/','AdminController@index');
    Route::get('/dashboard','AdminController@dashboard')->name('admin.adminDashboard');

    Route::get('/users/show/{user}','usersController@show')->name('users.show');



    Route::get('/ordersToCommission','ordersController@ordersToCommission')->name('orders.toCommission');
    Route::get('/allOrders','ordersController@index')->name('orders.index');


    Route::get('roles',function ()
    {
        return App\Role::all();
    });


    Route::resource('/users','usersController');
//    Route::resource('/roles','rolesController');


//    Route::get('/users','usersController@index')->name('users.index');
//    Route::get('/users/{user}/edit','usersController@edit')->name('users.edit');
    Route::get('/users/{user}','usersController@block')->name('users.block');
//    Route::get('/users/create','usersController@block')->name('create.user');
});