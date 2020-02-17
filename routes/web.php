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
Route::get('/cms/index', function () {
    return view('cms/index'); //ova e samo za testiranje bez kontroler, za vo momentov
});

//about us
Route::get('/cms/about_us/index', 'About_usController@index')->name('/cms/about_us/index');
Route::get('/cms/about_us/update_about_us', 'About_usController@update')->name('/cms/about_us/update_about_us');

//news
Route::get('/cms/news/index', 'NewsController@index')->name('/cms/news/index');
Route::get('/cms/news/update_news', 'NewsController@update')->name('/cms/news/update_news');

//employees

Route::get('/cms/employees/index', 'EmployeesController@index')->name('/cms/employees/index');
Route::get('/cms/employees/edit_employee/{id}', 'EmployeesController@edit')->name('/cms/employees/edit_employee');

//RUTI ZA INSERT,EDIT I DELETE ZA SITE.