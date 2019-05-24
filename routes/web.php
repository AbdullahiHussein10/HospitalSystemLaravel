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
    return redirect('/login');
});

Route::get('/patients_menu', function(){
    return view('patients.menu');
});

Route::resource('patients', 'PatientController');

Route::get('/add_patients', function(){
    return view('patients.create');
});

Route::get('/View_all_patients', function(){
    return view('patients.view');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('patients', 'PatientController');

Route::get('insert','PatientController@insertform');
Route::post('create','PatientController@store'); 
Route::get('view','PatientController@index');
Route::post('update/{id}','PatientController@update');
Route::get('edit/{id}','PatientController@edit');


Route::get('/appointments_menu', function(){
    return view('appointments.initial');
});

Route::get('search','DoctorController@search');

Route::get('/add_appointments{id}', function(){
    return view('appointments.create');
});

Route::get('/View_all_appointments',function()
{
    return view('appointments.view');
});

Route::resource('appointments', 'AppointmentController');
Route::get('insert','AppointmentController@insertform');
Route::post('create','AppointmentController@store'); 
Route::get('view','AppointmentController@index');
Route::post('update/{id}','AppointmentController@update');
Route::get('edit/{id}','AppointmentController@edit');

Route::get('/doctors_menu', function(){
    return view('Doctors.create');
});

Route::get('/add_doctors', function(){
    return view('Doctors.create');
});


Route::get('/View_all_doctors', function(){
    return view('Doctors.view');
});


Route::resource('doctors', 'DoctorController');


Route::get('insert','DoctorController@insertform');
Route::post('create','DoctorController@store'); 
Route::get('view','DoctorController@index');
Route::post('update/{id}','DoctorController@update');
Route::get('edit/{id}','DoctorController@edit');

Route::get('/add_doctors', function(){
    return view('Doctors.create');
});


Route::get('/nurses_menu', function(){
    return view('nurses.create');
});

Route::get('/add_nurses', function(){
    return view('nurses.create');
});

Route::get('/View_all_nurses', function(){
    return view('nurses.view');
});


Route::resource('nurses', 'NurseController');


Route::get('insert','NurseController@insertform');
Route::post('create','NurseController@store'); 
Route::get('view','NurseController@index');
Route::post('update/{id}','NurseController@update');
Route::get('edit/{id}','NurseController@edit');