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

Route::get('/', 'HomeController@index');
Route::get('/person', 'PersonController@index')->name('person');
Route::post('person/show', array(
    'as' => 'show',
    'uses' => 'PersonController@show')
)->name('person.show');
Route::get('person/add', 'PersonController@add')->name('person.add');
Route::post('person/add', 'PersonController@addValidate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/training', 'TrainingController@index')->name('training');
Route::get('/training/jsonindex', 'TrainingController@jsonindex')->name('training.jsonindex');

# Competence
Route::get('competence', 'CompetenceController@index')->name('competence');

# Test
Route::get('test', 'TestController@index')->name('test');

# Report
Route::get('report', 'ReportController@index')->name('report');

# Settings
Route::get('settings', 'SettingController@index')->name('settings');

# Users
Route::get('users', 'UserController@index')->name('users');

# Profil
Route::get('profil', 'ProfilController@index')->name('profil');

# Test
Route::get('qcm', 'QcmController@index')->name('qcm');

# Settings
Route::get('society', 'SocietyController@index')->name('settings.society');
Route::get('group', 'GroupController@index')->name('settings.group');
Route::get('section', 'SectionController@index')->name('settings.section');
Route::get('domaine', 'DomaineController@index')->name('settings.domaine');
Route::get('agency', 'AgencyController@index')->name('settings.agency');
Route::get('catalogue', 'CatalogueController@index')->name('settings.catalogue');
Route::get('modele', 'ModeleController@index')->name('settings.modele');
Route::get('trainer', 'TrainerController@index')->name('settings.trainer');
Route::get('places', 'PlaceController@index')->name('settings.places');