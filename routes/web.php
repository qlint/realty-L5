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
Route::resource('new', 'NewpropertyController');

Route::get('error', 'PagesController@getError')->name('error');

Route::get('login', 'PagesController@getLogin')->name('login');

Route::get('my-account', 'PagesController@getMyaccount')->name('my-account');

Route::get('properties-list-right-sidebar', 'PagesController@getPropertieslistrightsidebar')->name('properties-list-right-sidebar');

Route::get('properties-list-sidebar', 'PagesController@getPropertieslistsidebar')->name('properties-list-sidebar');

Route::get('properties-right-sidebar', 'PagesController@getPropertiesrightsidebar')->name('properties-right-sidebar');

Route::get('properties-sidebar', 'PagesController@getPropertiesidebar')->name('properties-sidebar');

Route::get('properties', 'PagesController@getProperties')->name('properties');

Route::get('register', 'PagesController@getRegister')->name('register');

Route::get('services', 'PagesController@getServices')->name('services');

Route::get('single-properties', 'PagesController@getSingleproperties')->name('single-properties');

Route::get('contact', 'PagesController@getContact')->name('contact');

Route::get('blog', 'PagesController@getBlog')->name('blog');

Route::get('blog-sidebar', 'PagesController@getBlogsidebar')->name('blog-sidebar');

Route::get('blog-right-sidebar', 'PagesController@getBlogrightsidebar')->name('blog-right-sidebar');

Route::get('article', 'PagesController@getArticle')->name('article');

Route::get('article-left-sidebar', 'PagesController@getArticleleftsidebar')->name('article-left-sidebar');

Route::get('agent', 'PagesController@getAgent')->name('agent');

Route::get('agent-details', 'PagesController@getAgentdetails')->name('agent-details');

Route::get('add-property', 'PagesController@getAddproperty')->name('add-property');

Route::get('about-us', 'PagesController@getAboutus')->name('about-us');

Route::get('/', 'PagesController@getIndex')->name('home');
