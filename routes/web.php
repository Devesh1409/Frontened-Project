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

// Route::get('/', function () {
//     return view('welcome');
// });

// Admin Controller

// Route::get('admin/dashboard','AdminController@dashboard');
Route::get('admin/add_banner','AdminController@add_banner');
Route::get('admin/show/{id}','AdminController@show');
Route::get('admin/add_welcome','AdminController@add_welcome');
Route::get('admin/add_drink','AdminController@add_drink');
Route::get('admin/add_lunch','AdminController@add_lunch');
Route::get('admin/add_dinner','AdminController@add_dinner');
Route::get('admin/add_menu','AdminController@add_menu');
Route::get('admin/add_gallery','AdminController@add_gallery');

//Banner 

Route::get('banner/create','BannerController@create');
Route::post('banner/insert','BannerController@save');
Route::get('banner/delete/{id}','BannerController@delete');
Route::get('admin/banner/edit/{id}','BannerController@edit');
Route::post('banner/update','BannerController@update');

//Frontend
Route::get('/','FrontendController@index');
Route::get('menu','FrontendController@menu');
Route::get('about','FrontendController@about');

//Reservation
Route::get('reservation/create','ReservationController@create');
Route::post('reservation/insert','ReservationController@save');
Route::get('reservation/delete/{id}','ReservationController@delete');
Route::get('admin/reservation/edit/{id}','ReservationController@edit');
Route::post('reservation/update','ReservationController@update');

//drink
Route::get('drink/create','DrinkController@create');
Route::post('drink/insert','DrinkController@save');
Route::get('drink/delete/{id}','DrinkController@delete');
Route::get('admin/drink/edit/{id}','DrinkController@edit');
Route::post('drink/update','DrinkController@update');

//lunch
Route::get('lunch/create','LunchController@create');
Route::post('lunch/insert','LunchController@save');
Route::get('lunch/delete/{id}','LunchController@delete');
Route::get('admin/lunch/edit/{id}','LunchController@edit');
Route::post('lunch/update','LunchController@update');

//dinner
Route::get('dinner/create','DinnerController@create');
Route::post('dinner/insert','DinnerController@save');
Route::get('dinner/delete/{id}','DinnerController@delete');
Route::get('admin/dinner/edit/{id}','DinnerController@edit');
Route::post('dinner/update','DinnerController@update');

// gallery
Route::get('gallery/create','GalleryController@create');
Route::post('gallery/insert','GalleryController@save');
Route::get('gallery/delete/{id}','WelcomeController@delete');
Route::get('admin/gallery/edit/{id}','GalleryController@edit');
Route::post('gallery/update','GalleryController@update');

Auth::routes();

Route::get('admin/dashboard','AdminController@dashboard');
