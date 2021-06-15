<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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




route::get('profile', 'profileController@index'); 


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('login','login');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('roles', 'rolesController');

Route::resource('compagnies', 'compagniesController');

Route::resource('chauffeurs', 'chauffeursController');

Route::resource('buses', 'busController');

Route::resource('itineraires', 'itinerairesController');

Route::resource('customers', 'customersController');

Route::resource('reservations', 'reservationsController');

Route::resource('tickets', 'ticketsController');

Route::resource('paiements', 'paiementsController');

Route::resource('users', 'usersController');

Route::view('profile','profile');
    
Route::post('/sendEmail', 'EmailConfigurationController@sendEmail')->name('sendEmail');

Route::resource('days', 'daysController');

Route::resource('times', 'timesController');

Route::resource('prices', 'pricesController');

Route::resource('departcities', 'departcityController');

Route::resource('arrivalcities', 'arrivalcityController');

Route::get('/compagnie-update-statut', 'compagniesController@updateCompagnieStatut');

Route::get('/chauffeur-update-statut', 'chauffeursController@updateChauffeurStatut');

Route::get('/bus-update-statut', 'busController@updateBusStatut');

Route::get('/itineraire-update-statut', 'itinerairesController@updateItineraireStatut');

// page principale

Route::get('/', 'AllPagesController@index');

Route::view('Accueil','pages.usersPage')->name('page');

Route::view('reservation','pages.reservation')->name('reservation');

Route::get('Reservation', 'AllPagesController@search')->name('reservation');

Route::get('search', 'AllPagesController@search')->name('reservation');

Route::view('Contact','pages.contact')->name('contact');

Route::get('contact-us', 'ContactController@getContact')->name('contact-us');

Route::post('contact-us', 'ContactController@saveContact')->name('contact-us');

