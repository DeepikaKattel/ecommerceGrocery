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

Route::get('/carousel', 'IndexController@carousel');

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
Route::get('/admin/itemlist/{id}/edit','Admin\ProductController@edit')->name('item.edit');
Route::post('/admin/itemlist/{id}','Admin\ProductController@update')->name('item.update');
Route::get('/admin/itemlist/destroy/{id}', 'Admin\ProductController@destroy')->name('i.destroy');

Route::get('/admin/departmentList','Admin\DepartmentController@index');
Route::get('/admin/department/add','Admin\DepartmentController@create');
Route::post('/admin/department/add','Admin\DepartmentController@store');
Route::get('/admin/department/{id}/edit','Admin\DepartmentController@edit')->name('department.edit');
Route::post('/admin/department/{id}','Admin\DepartmentController@update')->name('department.update');
Route::get('/admin/department/destroy/{id}', 'Admin\DepartmentController@destroy')->name('d.destroy');

Route::get('/contact', 'IndexController@contact');
Route::get('/contact/list','ContactUsController@index');
Route::post('/contact/add','ContactUsController@store')->name('contact.store');
Route::get('/contact/destroy/{id}', 'ContactUsController@destroy')->name('c.destroy');

Route::resource('/frontend', 'Admin\FrontendController');
Route::get('/frontend/destroy/{id}', 'Admin\FrontendController@destroy')->name('f.destroy');

Route::resource('/popup', 'Admin\PopUpController');
Route::get('/popup/destroy/{id}', 'Admin\PopUpController@destroy')->name('p.destroy');

Route::resource('/aboutUs', 'Admin\AboutUsController');
Route::get('/aboutUs/destroy/{id}', 'Admin\AboutUsController@destroy')->name('a.destroy');

Route::resource('/banner', 'BannerController');
Route::get('/banner/destroy/{id}', 'BannerController@destroy')->name('b.destroy');

Route::resource('/barcode', 'BarCodeController');
Route::get('/barcode/destroy/{id}', 'BarCodeController@destroy')->name('bc.destroy');

Route::get('/admin/vendor', 'Admin\VendorController@vendorList');
Route::post('/admin/vendor', 'Admin\VendorController@addVendor');
Route::delete('/admin/vendor/remove/{vendorId}','Admin\VendorController@deleteVendor');

Route::get('/admin/userlist','Admin\UserController@userlist');
Route::get('/admin/user/add','Admin\UserController@addUserPage');
Route::post('/admin/user/add','Admin\UserController@addUser');
Route::delete('/admin/user/remove/{userid}','Admin\UserController@removeUser');

Route::get('/admin/checkouts','Admin\CheckoutController@getCheckouts');

Route::get('livesearch','ProductsController@livesearch')->name('livesearch');

Route::get('/itemSort','Admin\ProductController@sort')->name('sort');
Route::get('/itemSearch','Admin\ProductController@search')->name('search');


Route::get('file-import-export', 'Admin\ProductController@fileImportExport');
Route::post('file-import', 'Admin\ProductController@fileImport')->name('file-import');
Route::get('file-export', 'Admin\ProductController@fileExport')->name('file-export');


Auth::routes();
Route::get('/profile', 'ProfileController@showProfile');
