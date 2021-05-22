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


Route::get('/','pagesController@front')->name('home');



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

Route::get('/Cart-page','pagesController@cartpage')->name('cartpage');
Route::get('/Empty-Cart','pagesController@emptycart')->name('emptycart');
Route::get('/Checkout-varient1','pagesController@varient1')->name('varient1');
Route::get('/Checkout-varient2','pagesController@varient2')->name('varient2');
Route::get('/Checkout-varient3','pagesController@varient3')->name('varient3');

Route::get('/Login','pagesController@login')->name('login');
Route::get('/Create-account','pagesController@create')->name('create');
Route::get('/Account-details','pagesController@details')->name('details');
Route::get('/Account-address','pagesController@address')->name('address');
Route::get('/Order-history','pagesController@order')->name('order');
Route::get('/Wishlist','pagesController@wishlist')->name('wishlist');

Route::get('/Right-sidebar','pagesController@rightside')->name('rightside');
Route::get('/Left-sidebar','pagesController@leftside')->name('leftside');
Route::get('/No-sidebar','pagesController@noside')->name('noside');
Route::get('/Sticky-sidebar','pagesController@stickyside')->name('stickyside');
Route::get('/Grid','pagesController@grid')->name('grid');
Route::get('blogpost/{slug}','pagesController@blogpost')->name('blogpost');


Route::get('/gallery','pagesController@gallery')->name('gallery');
Route::get('/faq','pagesController@faq')->name('faq');
Route::get('/about','pagesController@about')->name('about');
Route::get('/contact','pagesController@contact')->name('contact');
Route::get('/404-error','pagesController@page_404')->name('404_page');
Route::get('/Typography','pagesController@typography')->name('typography');
Route::get('/Coming-soon','pagesController@soon')->name('soon');








