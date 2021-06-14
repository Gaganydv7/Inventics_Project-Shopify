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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','pagesController@front')->name('med');



Route::get('/home','pagesController@index')->name('index');

Route::get('page1/{catgroup}/{catname}/{slug}','pagesController@page1')->name('page1');
// Route::get('page1/{slug}','pagesController@page1')->name('page1');
Route::get('page2','pagesController@page2')->name('page2');
Route::get('page3','pagesController@page3')->name('page3');
Route::get('page4','pagesController@page4')->name('page4');
Route::get('page5','pagesController@page5')->name('page5');
Route::get('page6','pagesController@page6')->name('page6');
Route::get('page7','pagesController@page7')->name('page7');


Route::get('sidebar/{slug}','categoryController@sidebar')->name('sidebar');
Route::get('/close-filter','categoryController@close')->name('close');
Route::get('/Horizontal-filter','categoryController@horizontal')->name('horizontal');
Route::get('/listing-view','categoryController@listing')->name('listing');
Route::get('/empty-category','categoryController@empty')->name('empty');

 


Route::post('addtocart','Cartcontroller@add_to_cart')->name('addtocart');

// Route::group(['middleware' => ['auth']], function() {

Route::get('cartpage','Cartcontroller@cartpage')->name('cartpage');
Route::get('/Empty-Cart','Cartcontrollerr@emptycart')->name('emptycart');
Route::get('/Checkout-varient1','Cartcontroller@varient1')->name('varient1');
Route::get('/Checkout-varient2','Cartcontrollerr@varient2')->name('varient2');
Route::get('/Checkout-varient3','Cartcontroller@varient3')->name('varient3');
// });

Route::get('/Login','AccountController@login')->name('login');
Route::get('/Create-account','AccountController@create')->name('create');
Route::get('/Account-details','AccountController@details')->name('details');
Route::get('/Account-address','AccountController@address')->name('address');
Route::get('/Order-history','AccountController@order')->name('order');
Route::get('/Wishlist','AccountController@wishlist')->name('wishlist');

Route::get('rightside','BlogController@rightside')->name('rightside');
Route::get('/Left-sidebar','BlogController@leftside')->name('leftside');
Route::get('/No-sidebar','BlogController@noside')->name('noside');
Route::get('/Sticky-sidebar','BlogController@stickyside')->name('stickyside');
Route::get('/Grid','BlogController@grid')->name('grid');
Route::get('blogpost/{slug}','BlogController@blogpost')->name('blogpost');


Route::get('/gallery','pagesController@gallery')->name('gallery');
Route::get('/faq','pagesController@faq')->name('faq');
Route::get('/about','pagesController@about')->name('about');
Route::get('/contact','pagesController@contact')->name('contact');
Route::get('/404-error','pagesController@page_404')->name('404_page');
Route::get('/Typography','pagesController@typography')->name('typography');
Route::get('/Coming-soon','pagesController@soon')->name('soon');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
