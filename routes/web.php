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

//Route::get('/', function () {
//    return view('welcome');
//});





Route::get('/', [
    'uses' =>'FrontController@index',
    'as' => 'front.index'
]);

Route::get('/restaurant/{id}-{param?}', [
    'uses' =>'FrontController@byRestaurant',
    'as' => 'front.byrestaurant'
]);

Route::get('/front/order/{menu}', [
    'uses' =>'FrontController@order',
    'as' => 'front.order'
]);

Route::post('/front/store/{menu}', [
    'uses' =>'FrontController@store',
    'as' => 'front.store'
]);

Route::get('/front/addToStore/{menu}', [
    'uses' =>'FrontController@addToStore',
    'as' => 'front.addToStore'
]);

Route::get('/front/basket', [
    'uses' =>'FrontController@basket',
    'as' => 'front.basket'
]);

Route::get('/front/RemoveFromBasket/{menu}', [
    'uses' =>'FrontController@RemoveFromBasket',
    'as' => 'front.RemoveFromBasket'
]);


Route::get('/cities', [
    'uses' =>'CitiesController@index',
    'as' => 'cities.index'
]);

Route::get('/cities/create', [
    'uses' =>'CitiesController@create',
    'as' => 'cities.create'
]);

Route::post('/cities/store', [
    'uses' =>'CitiesController@store',
    'as' => 'cities.store'
]);

Route::get('/cities/edit/{city}', [
    'uses' => 'CitiesController@edit',
    'as' => 'cities.edit'
]);

Route::put('/cities/{city}', [
    'uses' => 'CitiesController@update',
    'as' => 'cities.update'
]);
Route::delete('/cities/{city}', [
    'uses' => 'CitiesController@destroy',
    'as' => 'cities.delete'
]);




Route::get('/restaurants', [
    'uses' =>'RestaurantsController@index',
    'as' => 'restaurants.index'
]);

Route::get('/restaurants/create', [
    'uses' =>'RestaurantsController@create',
    'as' => 'restaurants.create'
]);

Route::post('/restaurants/store', [
    'uses' =>'RestaurantsController@store',
    'as' => 'restaurants.store'
]);

Route::get('/restaurants/edit/{restaurant}', [
    'uses' => 'RestaurantsController@edit',
    'as' => 'restaurants.edit'
]);

Route::put('/restaurants/{restaurant}', [
    'uses' => 'RestaurantsController@update',
    'as' => 'restaurants.update'
]);
Route::delete('/restaurants/{restaurant}', [
    'uses' => 'RestaurantsController@destroy',
    'as' => 'restaurants.delete'
]);



Route::get('/photos', [
    'uses' =>'PhotosController@index',
    'as' => 'photos.index'
]);

Route::get('/photos/create', [
    'uses' =>'PhotosController@create',
    'as' => 'photos.create'
]);

Route::post('/photos/store', [
    'uses' =>'PhotosController@store',
    'as' => 'photos.store'
]);

Route::get('/photos/edit/{photo}', [
    'uses' => 'PhotosController@edit',
    'as' => 'photos.edit'
]);

Route::put('/photos/{photo}', [
    'uses' => 'PhotosController@update',
    'as' => 'photos.update'
]);
Route::delete('/photos/{photo}', [
    'uses' => 'PhotosController@destroy',
    'as' => 'photos.delete'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/customers', [
    'uses' =>'CustomersController@index',
    'as' => 'customers.index'
]);

Route::get('/customers/create', [
    'uses' =>'CustomersController@create',
    'as' => 'customers.create'
]);

Route::post('/customers/store', [
    'uses' =>'CustomersController@store',
    'as' => 'customers.store'
]);

Route::get('/customers/edit/{customer}', [
    'uses' => 'CustomersController@edit',
    'as' => 'customers.edit'
]);

Route::put('/customers/{customer}', [
    'uses' => 'CustomersController@update',
    'as' => 'customers.update'
]);
Route::delete('/customers/{customer}', [
    'uses' => 'CustomersController@destroy',
    'as' => 'customers.delete'
]);


Route::get('/menus', [
    'uses' =>'MenusController@index',
    'as' => 'menus.index'
]);

Route::get('/menus/create', [
    'uses' =>'MenusController@create',
    'as' => 'menus.create'
]);

Route::post('/menus/store', [
    'uses' =>'MenusController@store',
    'as' => 'menus.store'
]);

Route::get('/menus/edit/{menu}', [
    'uses' => 'MenusController@edit',
    'as' => 'menus.edit'
]);

Route::put('/menus/{menu}', [
    'uses' => 'MenusController@update',
    'as' => 'menus.update'
]);
Route::delete('/menus/{menu}', [
    'uses' => 'MenusController@destroy',
    'as' => 'menus.delete'
]);




Route::get('/orders', [
    'uses' =>'OrdersController@index',
    'as' => 'orders.index'
]);

Route::get('/orders/create', [
    'uses' =>'OrdersController@create',
    'as' => 'orders.create'
]);

Route::post('/orders/store', [
    'uses' =>'OrdersController@store',
    'as' => 'orders.store'
]);

Route::get('/orders/edit/{order}', [
    'uses' => 'OrdersController@edit',
    'as' => 'orders.edit'
]);

Route::put('/orders/{order}', [
    'uses' => 'OrdersController@update',
    'as' => 'orders.update'
]);
Route::delete('/orders/{order}', [
    'uses' => 'OrdersController@destroy',
    'as' => 'orders.delete'
]);


Route::get('/order_items', [
    'uses' =>'Order_ItemsController@index',
    'as' => 'order_items.index'
]);

Route::get('/order_items/create', [
    'uses' =>'Order_ItemsController@create',
    'as' => 'order_items.create'
]);

Route::post('/order_items/store', [
    'uses' =>'Order_ItemsController@store',
    'as' => 'order_items.store'
]);

Route::get('/order_items/edit/{order_item}', [
    'uses' => 'Order_ItemsController@edit',
    'as' => 'order_items.edit'
]);

Route::put('/order_items/{order_item}', [
    'uses' => 'Order_ItemsController@update',
    'as' => 'order_items.update'
]);
Route::delete('/orders/{order_item}', [
    'uses' => 'Order_ItemsController@destroy',
    'as' => 'order_items.delete'
]);