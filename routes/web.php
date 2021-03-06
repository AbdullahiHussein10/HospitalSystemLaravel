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

Route::get('/admin', 'AdminController@index');
Route::get('/doc', 'DocController@index');
Route::get('/nurse', 'NursController@index');
Route::get('/pharmacist', 'PharmacistController@index');

Route::get('/home', function(){
    return view('admin.home');
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

Route::get('/view_doctors', function()
{
    return view('Doctors.view');
});

Route::get('/add_rooms', function(){
    return view('rooms.add');
});




Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/doc', 'Auth\LoginController@showdocLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/doc', 'Auth\RegisterController@showdocRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/doc', 'Auth\LoginController@docLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/doc', 'Auth\RegisterController@createdoc');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/doc', 'doc');

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

Route::get('search1','PatientController@search1');

Route::get('search2', 'CheckupController@search2');

Route::get('search1', 'PatientController@search1');

Route::get('/book_appointments', function(){
    return view('appointments.create');
});


Route::get('/schedule_appointments',function()
{
    return view('appointments.initial');
});

Route::resource('appointments', 'AppointmentController');
Route::get('/view_appointments','AppointmentController@show');
Route::get('insert','AppointmentController@insertform');
Route::post('create','AppointmentController@store'); 
Route::get('view','AppointmentController@show');
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


Route::get('search','PatientController@search');

Route::get('/View_all_rooms',function()
{
    return view('rooms.view');
});

Route::get('/assign-room',function()
{
    return view('rooms.initial2');
});

Route::resource('rooms', 'RoomController');
Route::get('insert','RoomController@insertform');
Route::post('create','RoomController@store'); 
Route::get('/admitted_patients','RoomController@show');
Route::post('assign/{id}','RoomController@assign');


Route::get('/schedule_appointments',function()
{
    return view('appointments.initial');
});

Route::resource('checkups', 'CheckupController');
Route::get('insert','CheckupController@insertform');
Route::post('create','CheckupController@store'); 
Route::get('/viewcheckups','CheckupController@show');
Route::post('update/{id}','CheckupController@update');
Route::get('edit/{id}','CheckupController@edit');


Route::resource('diagnosis', 'DiagnosisController');
Route::get('/diagnosis/create/', function()
{
    return view('diagnosis.create');
});
Route::get('/diagnosis/create/{patients_id}','DiagnosisController@create');

Route::get('insert','DiagnosisController@insertform');
Route::post('create','DiagnosisController@store'); 
Route::post('update/{id}','DiagnosisController@update');
Route::get('edit/{id}','DiagnosisController@edit');


Route::get('/doc/appointments', function()
{
    return view('doc.appointments');
});

Route::get('search3', 'Doc_appointmentController@search3');

Route::get('/doc/viewappointments', function(){
    return view('doc.viewappointments');
});

Route::get('/admit_patients', function(){
    return view('patients.admit');
});

Route::resource('admit', 'AdmitController');
Route::get('search4', 'AdmitController@search4');

Route::get('/patients/admit1/{patients_id}', 'RoomController@create');


Route::get('/assign_drugs', function(){
    return view('pharmacist.assign');
});
Route::get('/patients/pharmacy1/{patients_id}','MedicineController@create');


Route::resource('pharmacy', 'PharmacyController');

Route::get('search5', 'PharmacyController@search5');
Route::get('insert','PharmacyController@insertform');
Route::post('create','PharmacyController@store'); 
Route::get('/View_drugs','PharmacyController@index');
Route::post('update/{id}','PharmacyController@update');
Route::get('edit/{id}','PharmacyController@edit');

Route::resource('medicine', 'MedicineController');
Route::get('assign2/{patients_id}','MedicineController@create');
Route::post('create','MedicineController@store');



Route::get('/add_drugs', function(){
    return view('pharmacist.create');
});

Route::get('view_assigned_drugs', function(){
    return view('pharmacist.view_assigned_drugs');
});
Route::get('search6', 'MedicineController@search6');

