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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/', 'WelcomeController@index')->name('welcome.index');

Route::view('about', 'about.index')->name('about.index');

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

Route::resource('users', 'UsersController');

Route::resource('events', 'EventsController');
Route::resource('states', 'StatesController');
Route::resource('favorites', 'FavoritesController');

Route::resource('tickets', 'TicketsController');

Route::get('users/{user}/hosted/{any_hosted_event}/edit', 'UserHostedEventsController@edit');
Route::put('users/{user}/hosted/{any_hosted_event}', 'UserHostedEventsController@update');
Route::resource('users.hosted', 'UserHostedEventsController');
Route::resource('users.upcoming', 'UserUpcomingEventsController');

Route::resource('categories', 'CategoriesController');
Route::resource('locations', 'LocationsController');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => 'admin'], function()
{
    Route::get('users', 'UsersController@index')->name('admin.users');
    Route::get('events', 'EventsController@index')->name('admin.events');
});


//Route::resource('/api/events', 'API\EventsController');