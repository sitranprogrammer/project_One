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

Route::get('/','langdingpageController@index')->name('index');
Route::get('/blank','langdingpageController@blank');
// Route::get('/getbyid{id}','langdingpageController@catalog')->name('productbyid');

Route::get('/selectallbyid{id}','langdingpageController@selectallbyid')->name('product-1');
Route::get('/product/{slug}/{id}','langdingpageController@product')->name('product');
Route::get('/store','langdingpageController@store');
// Route::get('/find-product','langdingpageController@findProduct')->name('findProduct');
Route::get('login','LoginController@index')->name('ShowLogin');
Route::post('login','LoginController@login')->name('login');
Route::get('logout','LoginController@logout')->name('logout');

Route::group(['prefix'=>'quan-tri','middleware'=>['auth']],function(){
    Route::get('ho-so','Auth\ChangePasswordController@indexChange')->name('profile');
    Route::post('profile-update','Auth\ChangePasswordController@postChange')->name('update-profile');
    Route::resource('dash-board','DashboardController');
    Route::resource('san-pham','ProductController');
    Route::resource('danh-muc-cap-1','CatalogLevel1Controller');
    Route::resource('danh-muc-cap-2','CatalogLevel2Controller');
    Route::resource('quan-ly-don-hang','OrderController');
    Route::resource('dai-ly','AgencyController');
    Route::resource('khach-hang','CustomerController');
    Route::get('catalog/{id_parent}','AjaxController@getCatalog');
    //slide
    Route::resource('slide','SlideController');

    
    //logo & favicon
    Route::get('favicon','InformationController@indexFavicon')->name('favicon');
    Route::get('favicon/{id}','InformationController@getFavicon');
    Route::post('favicon/{id}','InformationController@postFavicon')->name('favicon-ss');
    Route::get('logo','InformationController@indexLogo')->name('logo');
    Route::get('logo/{id}','InformationController@getLogo');
    Route::post('logo/{id}','InformationController@postLogo')->name('logo-ss');

    //trong admin
    Route::get('dang-ky-nhan-tin','SupportController@getSub')->name('sub');
    Route::get('ho-tro','SupportController@getSup')->name('sup');
    Route::get('chi-tiet-ho-tro/{id}','SupportController@viewSup')->name('viewsup');

    // ngoài website
    Route::post('postsupport','PageController@postContact')->name('postsupport');
    Route::post('postsubscribe','PageController@postSubscribe')->name('postsubscribe');
});
Route::get('search','PostController@search');


Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@add')->name('cart.add');
Route::post('/cart/conditions','CartController@addCondition')->name('cart.addCondition');
Route::delete('/cart/conditions','CartController@clearCartConditions')->name('cart.clearCartConditions');
Route::get('/cart/details','CartController@details')->name('cart.details');
Route::delete('/cart/{id}','CartController@delete')->name('cart.delete');



Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@add')->name('cart.add');
Route::post('/cart/conditions','CartController@addCondition')->name('cart.addCondition');
Route::delete('/cart/conditions','CartController@clearCartConditions')->name('cart.clearCartConditions');
Route::get('/cart/details','CartController@details')->name('cart.details');
Route::delete('/cart/{id}','CartController@delete')->name('cart.delete');

Route::group(['prefix' => 'wishlist'],function()
{
    Route::get('/','WishListController@index')->name('wishlist.index');
    Route::post('/','WishListController@add')->name('wishlist.add');
    Route::get('/details','WishListController@details')->name('wishlist.details');
    Route::delete('/{id}','WishListController@delete')->name('wishlist.delete');
});
//shopping cart
Route::get('add-to-card/{id}','CartController@cart')->name('addCart');
Route::get('shopping-cart', [
    'as'=>'shopping-cart',
    'uses'=>'CartController@getShoppingCart'
]);
Route::get('xoaitem/{rowId}','CartController@deleteItem')->name('deleteItem');
Route::post('update-cart','CartController@updateCart')->name('updateCart');
    


Route::get('/sendmailler','mailer@sendmailler')->name('sendmailler');

Route::get('/viewcart','langdingpageController@viewcart')->name('viewcart');
Route::get('/deleteItem/{id}','langdingpageController@deleteItem')->name('deleteItem');
Route::get('/autocomplete','AutocompleteController@Autocomplete')->name('autocomplete');

Route::GET('/checkout','mailer@getmail')->name('checkout');
Route::get('/test', function () {
    return view('test1');
});

Route::get('/catalog={id}','getbyid@selectbydid')->name('catalog');

