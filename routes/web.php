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


//Route::get('/', function () {return view('index');});

//FrontEnd Route
Route::get('/','FrontEndControler@index')->name('index');
Route::get('post/{id}','FrontEndControler@single')->name('posts.single');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('categories','CategoriesController');

//Post Route
Route::resource('posts','PostsController');
Route::get('trashed-posts','PostsController@trashed')->name('posts.trashed');
Route::put('restore-posts/{post}','PostsController@restore')->name('posts.restore');

//Shopping Route
Route::post('/cart/add','ShoppingController@cartAdd')->name('cart.add');
Route::get('/cart','ShoppingController@cart')->name('cart');

Route::get('/cart/delete/{id}','ShoppingController@cartDelete')->name('cart.delete');

Route::get('/cart/incr/{id}/{qty}','ShoppingController@incr')->name('cart.incr');
Route::get('/cart/decr/{id}/{qty}','ShoppingController@decr')->name('cart.decr');
Route::get('/cart/rapid/add/{id}' ,'ShoppingController@addRapid')->name('cart.rapid.add');

//checkout Route
Route::get('/cart/checkout','CheckoutController@index')->name('cart.checkout');
Route::post('/cart/checkout','CheckoutController@pay')->name('cart.checkout');

//Header Route
//Route::resource('headers','HeadersController')->middleware('auth');
Route::resource('headers','HeadersController');
Route::get('/slide','HeadersController@slide')->name('slide');

//footer Route
//Route::get('/footerList','FooterController@list');
Route::get('/footers/list','FooterController@list')->name('list');
Route::resource('footers','FooterController');


//Users Route
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::post('users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin'); 
});