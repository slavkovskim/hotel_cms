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

//index, instert, edit, delete   always most important
//news
    Route::get('/cms/news/index', 'NewsController@index')->name('/cms/news/index');
    Route::get('/cms/news/update_news', 'NewsController@update')->name('/cms/news/update_news');
    Route::get('/cms/news/edit_news/{id}', 'NewsController@edit')->name('/cms/news/edit_news');
    Route::get('/cms/news/create_news', 'NewsController@create')->name('/cms/news/create_news');
    Route::post('/cms/news/store_news', 'NewsController@store')->name('/cms/news/store_news');

});

//RUTI ZA INSERT,EDIT I DELETE ZA SITE.