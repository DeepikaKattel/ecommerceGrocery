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

Route::get('/', 'IndexController@index');
Route::get('/home', 'IndexController@home')->name('home');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/blog', 'IndexController@blog');
Route::get('/contact', 'IndexController@contact');
Route::get('/faq', 'IndexController@faq');

Route::get('/product/{id}', 'ProductsController@showProduct');
Route::get('/department', 'ProductsController@getDepartments');
Route::get('/department/{department}', 'ProductsController@showProducts');
Route::post('/products/search', 'ProductsController@searchProducts');
Route::get('/products/tag_search', 'ProductsController@searchProductsByTag');
Route::get('/cart', 'CartController@getCart');
Route::post('/cart/add', 'CartController@addToCart');
Route::get('/cart/list', 'CartController@getCartList');
Route::post('/cart/remove', 'CartController@removeFromCart');
Route::get('/checkout', 'CartController@checkoutForm');
Route::post('/checkout', 'CartController@checkout');

//admin Dashboard
// Route::get('/admin/dashboard','Admin\DashboardController@index')->middleware('role:3');
Route::get('/admin/dashboard','Admin\DashboardController@index');

Route::get('/admin/itemlist','Admin\ProductController@itemslist');
Route::get('/admin/itemlist/add','Admin\ProductController@addItemPage');
Route::post('/admin/itemlist/add','Admin\ProductController@additem');

Route::get('/admin/departmentList','Admin\DepartmentController@index');
Route::get('/admin/department/add','Admin\DepartmentController@create');
Route::post('/admin/department/add','Admin\DepartmentController@store');

Route::get('/admin/vendor', 'Admin\VendorController@vendorList');
Route::post('/admin/vendor', 'Admin\VendorController@addVendor');
Route::delete('/admin/vendor/remove/{vendorId}','Admin\VendorController@deleteVendor');

Route::get('/admin/userlist','Admin\UserController@userlist');
Route::get('/admin/user/add','Admin\UserController@addUserPage');
Route::post('/admin/user/add','Admin\UserController@addUser');
Route::delete('/admin/user/remove/{userid}','Admin\UserController@removeUser');

Route::get('/admin/checkouts','Admin\CheckoutController@getCheckouts');


Auth::routes();
Route::get('/profile', 'ProfileController@showProfile');
