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



//CMS panel:

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');


//Route::get('/admin', 'AdminController@index')->name('home');  bese ovaka?!?!

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
//Homepage

//News front end
Route::get('/', 'IndexController@index')->name('homepage');



//Route::group(['middleware' => ['users']], function() {

//Registration and Login
    Route::get('/userlogin', function(){
        return view('userlogin');
    });
    Route::get('/userregister', function(){
        return view('userregister');
    });

    Route::post('/userregisterpost', 'UserRegisterLoginController@userregisterpost')->name('userregisterpost');



//Route::get('/adminhome', 'HomeController@index')->name('home');   ovaa e gotovata od laravel koga ke se najavi admin ama koristam drugo sto go nosi na dashboard




    Route::get('/about', function(){
        return view('about');
    });
    Route::get('/about', 'About_usController@indexFe')->name('/about');

//Contact us page

    Route::get('/contact', function(){
        return view('contact');
    });

    Route::get('/contact', [
        'uses' => 'Contact_usController@create'
    ]);


    Route::post('/contact', [
        'uses' => 'Contact_usController@store',
        'as' => 'contact.store'
    ]);


//Rooms reservation front end
    Route::get('/rooms', function(){
        return view('rooms');
    });

    Route::get('/rooms', 'Rooms_frontendController@indexRoomsFe')->name('rooms');


    //Rooms  RESERVARTION FOR ROOMS!!!!! FRONT END

    Route::post('/reservation', 'ReservationsController@reservationRoom')->name('reservation');
    Route::get('/hotel_reservation', 'ReservationsController@index')->name('hotel_reservation');




//Spa reservation front end
    Route::get('/spa', function(){
        return view('spa');
    });

    Route::get('/spa', 'Spa_frontendController@indexSpaFe')->name('spas');

    Route::post('/spa_reservations', 'Spa_reservationsController@reservationSpa')->name('spa_reservations');
    Route::get('/spa_treatment_reservations' , 'Spa_reservationsController@index')->name('spa_treatment_reservations');


//});

Auth::routes(); //if I put them inside middleware login is broken



//Route::group(['middleware' => ['admins']], function() {


//    Route::get('/home', function(){
//        return view('cms/index');
//    });

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
    Route::post('/cms/rooms/store_image', 'RoomsController@store_image')->name('/cms/rooms/store_image');
    Route::get('/cms/rooms/gallery/{id}', 'RoomsController@gallery')->name('/cms/rooms/gallery');
    Route::get('/cms/rooms/delete_gallery_image/{id}/{id_room}', 'RoomsController@delete_gallery_image')->name('/cms/rooms/delete_gallery_image');

//Room reservations
Route::get('/cms/room_reservations/index', 'Room_reservationsController@index')->name('/cms/room_reservations/index');
Route::get('/cms/room_reservations/changestatus/{id_old_status}/{id}', 'Room_reservationsController@reservationStatusChange')->name('/cms/room_reservations/changestatus');

//spa
    Route::get('/cms/spa/index', 'SpaController@index')->name('/cms/spa/index');
    Route::post('/cms/spa/update_spa', 'SpaController@update')->name('/cms/spa/update_spa');
    Route::get('/cms/spa/edit_spa/{id}', 'SpaController@edit')->name('/cms/spa/edit_spa');
//    Route::get('/cms/spa/create_spa', 'SpaController@create')->name('/cms/spa/create_spa');
    Route::post('/cms/spa/store_spa', 'SpaController@store')->name('/cms/spa/store_spa');
    Route::get('/cms/spa/delete_spa/{id}', 'SpaController@destroy')->name('/cms/spa/delete_spa');
    Route::get('/cms/spa/create_spa', 'SpaController@spa_employee')->name('/cms/spa/create_spa'); //works like this


//Spa reservations
Route::get('/cms/spa_reservations/index',  'Spa_reservations2Controller@index')->name('/cms/spa_reservations/index');
Route::get('/cms/spa_reservations/changestatus/{id_old_status}/{id}', 'Spa_reservations2Controller@spaReservationStatusChange')->name('/cms/spa_reservations/changestatus');







//});


//contact_us cms del

Route::get('/cms/contact_us/index', 'Contact_usController@index')->name('/cms/contact_us/index');

