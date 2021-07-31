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
Auth::routes();

Route::get('logout','Auth\LoginController@logout')->name('logout');
Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::view('/login', '/auth/login')->name('login');

Route::get('/services', 'ServicesController@index')->name('services');

Route::view('/regSec', '/auth/register');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::post('/contact', 'ContactController@sendMail')->name('sendMail');

Route::get('/ABM/index', 'ABM\ABMindexcontroller@index')->middleware('admin')->name('ABMindex');


//ABM ABOUT SECTION

Route::get('/ABM/about/mainAbout', 'ABM\ABMaboutcontroller@index')->middleware('admin');

Route::view('/ABM/about/addAbout' , '/ABM/about/aboutTable/addAbout')->middleware('admin');
Route::post('/ABM/about/addAbout', 'ABM\ABMaboutcontroller@addAbout')->middleware('admin');



Route::get('/ABM/about/editAbout/{id}', 'ABM\ABMaboutcontroller@editAboutDirect')->middleware('admin');
Route::post('/ABM/about/editAbout', 'ABM\ABMaboutcontroller@editAbout')->middleware('admin');

Route::get('/ABM/about/editAbout/{id}/removeDescription', 'ABM\ABMaboutcontroller@removeAboutDescription')->middleware('admin');
Route::get('/ABM/about/editAbout/{id}/removePhoto', 'ABM\ABMaboutcontroller@removeAboutPhoto')->middleware('admin');

Route::get('/ABM/about/destroyAbout/{id}', 'ABM\ABMaboutcontroller@removeAbout')->middleware('admin');

// ABM EXPERIENCE SECTION

Route::view('/ABM/about/addExperience', '/ABM/about/experiencesTable/addExperience')->middleware('admin');
Route::post('ABM/about/addExperience', 'ABM\ABMaboutcontroller@addExperience')->middleware('admin');

Route::get('/ABM/about/editExperience/{id}', 'ABM\ABMaboutcontroller@editExperienceDirect')->middleware('admin');
Route::post('/ABM/about/editExperience', 'ABM\ABMaboutcontroller@editExperience')->middleware('admin');

Route::get('ABM/about/editExperience/{id}/removeDescription', 'ABM\ABMaboutcontroller@removeExperienceDescription')->middleware('admin');
Route::get('ABM/about/editExperience/{id}/removePhoto', 'ABM\ABMaboutcontroller@removeExperiencePhoto')->middleware('admin');

Route::get('/ABM/about/destroyExperience/{id}', 'ABM\ABMaboutcontroller@removeExperience')->middleware('admin');

//ABM ABOUT-BACKGROUND SECTION

Route::view('/ABM/about/addBackground', '/ABM/about/backgroundTable/addBackground')->middleware('admin');
Route::post('/ABM/about/addBackground', 'ABM\ABMaboutcontroller@addBackground')->middleware('admin');

Route::get('ABM/about/editBackground/{id}', 'ABM\ABMaboutcontroller@editBackgroundDirect')->middleware('admin');
Route::post('ABM/about/editBackground', 'ABM\ABMaboutcontroller@editBackground')->middleware('admin');

Route::get('ABM/about/destroyBackground/{id}', 'ABM\ABMaboutcontroller@removeBackground')->middleware('admin');
Route::get('ABM/about/editBackground/{id}/removePhoto', 'ABM\ABMaboutcontroller@removeBackgroundPhoto')->middleware('admin');


//ABM SERVICE SECTION

Route::get('ABM/service/mainService', 'ABM\ABMservicecontroller@index')->middleware('admin');

Route::view('ABM/service/addService', '/ABM/services/serviceTable/addService')->middleware('admin');
Route::post('ABM/service/addService', 'ABM\ABMservicecontroller@addService')->middleware('admin');

Route::get('/ABM/service/editService/{id}', 'ABM\ABMservicecontroller@editServiceDirect')->middleware('admin');
Route::post('/ABM/service/editService', 'ABM\ABMservicecontroller@editService')->middleware('admin');

Route::get('ABM/service/editService/{id}/removeDescription', 'ABM\ABMservicecontroller@removeServiceDescription')->middleware('admin');
Route::get('ABM/service/editService/{id}/removePhoto', 'ABM\ABMservicecontroller@removeServicePhoto')->middleware('admin');

Route::get('/ABM/service/destroyService/{id}', 'ABM\ABMservicecontroller@removeService')->middleware('admin');

//ABM SERVICE BACKGROUND SECTION

Route::view('/ABM/service/addBackground', '/ABM/services/serviceBackgroundTable/addBackground')->middleware('admin');
Route::post('/ABM/service/addBackground', 'ABM\ABMservicecontroller@addBackground')->middleware('admin');

Route::get('ABM/service/editBackground/{id}', 'ABM\ABMservicecontroller@editBackgroundDirect')->middleware('admin');
Route::post('ABM/service/editBackground', 'ABM\ABMservicecontroller@editBackground')->middleware('admin');

Route::get('ABM/service/destroyBackground/{id}', 'ABM\ABMservicecontroller@removeBackground')->middleware('admin');
Route::get('ABM/service/editBackground/{id}/removePhoto', 'ABM\ABMservicecontroller@removeBackgroundPhoto')->middleware('admin');


//ABM HOME-SECTION

Route::get('/ABM/home/mainHome', 'ABM\ABMhomecontroller@index')->middleware('admin');

//ABOUT-HOME-TABLE

Route::view('ABM/home/addAbout', '/ABM/home/about/addAbout')->middleware('admin');
Route::post('ABM/home/addAbout', 'ABM\ABMhomecontroller@addAbout')->middleware('admin');

Route::get('ABM/home/editAbout/{id}', 'ABM\ABMhomecontroller@editAboutDirect')->middleware('admin');
Route::post('ABM/home/editAbout', 'ABM\ABMhomecontroller@editAbout')->middleware('admin');

Route::get('ABM/home/editAbout/{id}/removePhoto', 'ABM\ABMhomecontroller@removeAboutPhoto')->middleware('admin');
Route::get('ABM/home/destroyAbout/{id}', 'ABM\ABMhomecontroller@removeAbout')->middleware('admin');

//SERVICES-HOME-TABLE

Route::view('/ABM/home/addService', 'ABM/home/services/addService')->middleware('admin');
Route::post('/ABM/home/addService', 'ABM\ABMhomecontroller@addService')->middleware('admin');

Route::get('/ABM/home/editService/{id}', 'ABM\ABMhomecontroller@editServiceDirect')->middleware('admin');
Route::post('/ABM/home/editService', 'ABM\ABMhomecontroller@editService')->middleware('admin');

Route::get('ABM/home/destroyService/{id}', 'ABM\ABMhomecontroller@removeService')->middleware('admin');

//BACKGROUND-HOME-TABLE

Route::view('ABM/home/addBackground', 'ABM/home/background/addBackground')->middleware('admin');
Route::post('ABM/home/addBackground', 'ABM\ABMhomecontroller@addBackground')->middleware('admin');

Route::get('ABM/home/editBackground/{id}', 'ABM\ABMhomecontroller@editBackgroundDirect')->middleware('admin');
Route::post('ABM/home/editBackground', 'ABM\ABMhomecontroller@editBackground')->middleware('admin');

Route::get('ABM/home/editBackground/{id}/removePhoto', 'ABM\ABMhomecontroller@removeBackgroundPhoto')->middleware('admin');
Route::get('ABM/home/destroyBackground/{id}', 'ABM\ABMhomecontroller@removeBackground')->middleware('admin');

//CONTACT BACKGROUND TABLE

Route::get('/ABM/contact/mainContact', 'ABM\ABMcontactcontroller@index')->middleware('admin');

Route::view('/ABM/contact/addContact', 'ABM/contact/addContact')->middleware('admin');
Route::post('/ABM/contact/addContact', 'ABM\ABMcontactcontroller@addContact')->middleware('admin');

Route::get('/ABM/contact/editContact/{id}', 'ABM\ABMcontactcontroller@editContactDirect')->middleware('admin');
Route::post('/ABM/contact/editContact', 'ABM\ABMcontactcontroller@editContact')->middleware('admin');

Route::get('ABM/contact/editContact/{id}/removePhoto', 'ABM\ABMcontactcontroller@removePhoto')->middleware('admin');
Route::get('ABM/contact/destroyContact/{id}', 'ABM\ABMcontactcontroller@removeContact')->middleware('admin');
