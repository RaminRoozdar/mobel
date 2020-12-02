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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/test', 'TestController@test')->name('test');

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/product/show/{id}', 'ProductController@show')->name('product.show');
Route::get('/product/buy/{id}', 'ProductController@buy')->name('product.buy')->middleware('auth');
Route::post('/product/payment/{id}', 'ProductController@payment')->name('product.payment')->middleware('auth');

Route::get('/user/orders', 'OrderController@orders')->name('user.orders')->middleware('auth');


Route::group( [ 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin' ], function () {

    Route::get( '/', 'DashboardController@index' )->name( 'admin.dashboard' );
    // users routes
    Route::get( '/users', 'UsersController@index' )->name( 'admin.users.list' );
    /*Route::get( '/users/create', 'UsersController@create' )->name( 'admin.users.create' );
    Route::post( '/users/create', 'UsersController@store' )->name( 'admin.users.store' );
    Route::get( '/users/delete/{user_id}', 'UsersController@delete' )->name( 'admin.users.delete' );
    Route::get( '/users/edit/{user_id}', 'UsersController@edit' )->name( 'admin.users.edit' );
    Route::post( '/users/edit/{user_id}', 'UsersController@update' )->name( 'admin.users.update' );*/
    Route::get( '/users/orders/{user_id}', 'UsersController@orders' )->name( 'admin.users.orders' );

    //products routes
    Route::get( '/products', 'ProductController@index' )->name( 'admin.products.list' );
    Route::get( '/products/create', 'ProductController@create' )->name( 'admin.products.create' );
    Route::post( '/products/create', 'ProductController@store' )->name( 'admin.products.store' );
    Route::get( '/products/edit/{file_id}', 'ProductController@edit' )->name( 'admin.products.edit' );
    Route::post( '/products/edit/{file_id}', 'ProductController@update' )->name( 'admin.products.update' );

    //product buys
    Route::get( '/orders', 'OrderController@index' )->name( 'admin.orders.list' );

    //plans routes
    Route::get( '/plans', 'PlansController@index' )->name( 'admin.plans.list' );
    Route::get( '/plans/create', 'PlansController@create' )->name( 'admin.plans.create' );
    Route::post( '/plans/create', 'PlansController@store' )->name( 'admin.plans.store' );
    Route::get( '/plans/edit/{plan_id}', 'PlansController@edit' )->name( 'admin.plans.edit' );
    Route::post( '/plans/edit/{plan_id}', 'PlansController@update' )->name( 'admin.plans.update' );
    Route::get( '/plans/remove/{plan_id}', 'PlansController@remove' )->name( 'admin.plans.remove' );

    //packages routes
    Route::get( '/packages', 'PackagesController@index' )->name( 'admin.packages.list' );
    Route::get( '/packages/create', 'PackagesController@create' )->name( 'admin.packages.create' );
    Route::post( '/packages/create', 'PackagesController@store' )->name( 'admin.packages.store' );
    Route::get( '/packages/edit/{package_id}', 'PackagesController@edit' )->name( 'admin.packages.edit' );
    Route::post( '/packages/edit/{package_id}', 'PackagesController@update' )->name( 'admin.packages.update' );
    Route::get( '/packages/remove/{package_id}', 'PackagesController@remove' )->name( 'admin.packages.remove' );
    Route::get( '/packages/sync_files/{package_id}', 'PackagesController@syncFiles' )->name( 'admin.packages.sync_files' );
    Route::post( '/packages/sync_files/{package_id}', 'PackagesController@updateSyncFiles' )->name( 'admin.packages.sync_files' );

    //Payments routes
    Route::get( '/payments', 'PaymentsController@index' )->name( 'admin.payments.list' );
//    Route::get('/payments/create', 'PaymentsController@create')->name('admin.payments.create');
//    Route::post('/payments/create', 'PaymentsController@store')->name('admin.payments.store');
//    Route::get('/payments/edit/{payment_id}', 'PaymentsController@edit')->name('admin.payments.edit');
//    Route::post('/payments/edit/{payment_id}', 'PaymentsController@update')->name('admin.payments.update');
    Route::get( '/payments/remove/{payment_id}', 'PaymentsController@remove' )->name( 'admin.payments.remove' );

    //packages routes
    Route::get( '/categories', 'CategoriesController@index' )->name( 'admin.categories.list' );
    Route::get( '/categories/create', 'CategoriesController@create' )->name( 'admin.categories.create' );
    Route::post( '/categories/create', 'CategoriesController@store' )->name( 'admin.categories.store' );
    Route::get( '/categories/edit/{id}', 'CategoriesController@edit' )->name( 'admin.categories.edit' );
    Route::post( '/categories/edit/{category_id}', 'CategoriesController@update' )->name( 'admin.categories.update' );
    Route::get( '/categories/remove/{category_id}', 'CategoriesController@remove' )->name( 'admin.categories.remove' );
} );


