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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/adminhome', 'HomeController@index')->name('home');

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});
Route::get('/homepage', function(){
   return view('homepage');
});

//CMS:

//pochetna cms
Route::group(['middleware' => ['auth']], function() {
    Route::get('/cms/index', function () {
        return view('cms/index'); //ova e samo za testiranje bez kontroler, za vo momentov
    });

//about us
    Route::get('/cms/about_us/index', 'About_usController@index')->name('/cms/about_us/index');
    Route::get('/cms/about_us/update_about_us', 'About_usController@update')->name('/cms/about_us/update_about_us');

//Employees
    Route::get('/cms/employees/index', 'EmployeesController@index')->name('/cms/employees/index');
    Route::get('/cms/employees/create_employee', 'EmployeesController@create')->name('/cms/employees/create_employee');
    Route::post('/cms/employees/store_employee', 'EmployeesController@store')->name('/cms/employees/store_employee');
    Route::get('/cms/employees/edit_employee/{id}', 'EmployeesController@edit')->name('/cms/employees/edit_employee');
    Route::post('/cms/employees/update_employee', 'EmployeesController@update')->name('/cms/employees/update_employee');
    Route::get('/cms/employees/delete_employee/{id}/{id_2}', 'EmployeesController@destroy')->name('/cms/employees/delete_employee');

//Clients
    Route::get('/cms/clients/index', 'ClientsController@index')->name('/cms/clients/index');
    Route::get('/cms/clients/create_client', 'ClientsController@create')->name('/cms/clients/create_client');
    Route::post('/cms/clients/store_client', 'ClientsController@store')->name('/cms/clients/store_client');
    Route::get('/cms/clients/edit_client/{id}', 'ClientsController@edit')->name('/cms/clients/edit_client');
    Route::post('/cms/clients/update_client', 'ClientsController@update')->name('/cms/clients/update_client');
    Route::get('/cms/clients/delete_client/{id}/{id_2}', 'ClientsController@destroy')->name('/cms/clients/delete_client');


//news
    Route::get('/cms/news/index', 'NewsController@index')->name('/cms/news/index');
    Route::post('/cms/news/update_news', 'NewsController@update')->name('/cms/news/update_news');
    Route::get('/cms/news/edit_news/{id}', 'NewsController@edit')->name('/cms/news/edit_news');
    Route::get('/cms/news/create_news', 'NewsController@create')->name('/cms/news/create_news');
    Route::post('/cms/news/store_news', 'NewsController@store')->name('/cms/news/store_news');
    Route::get('/cms/news/delete_news/{id}', 'NewsController@destroy')->name('/cms/news/delete_news');

//rooms
    Route::get('/cms/rooms/index', 'RoomsController@index')->name('/cms/rooms/index');
    Route::post('/cms/rooms/update_rooms', 'RoomsController@update')->name('/cms/rooms/update_rooms');
    Route::get('/cms/rooms/edit_rooms/{id}', 'RoomsController@edit')->name('/cms/rooms/edit_rooms');
    Route::get('/cms/rooms/create_rooms', 'RoomsController@create')->name('/cms/rooms/create_rooms');
    Route::post('/cms/rooms/store_rooms', 'RoomsController@store')->name('/cms/rooms/store_rooms');
    Route::get('/cms/rooms/delete_rooms/{id}', 'RoomsController@destroy')->name('/cms/rooms/delete_rooms');
});

//RUTI ZA INSERT,EDIT I DELETE ZA SITE.