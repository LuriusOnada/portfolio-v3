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

// Page d'accueil (et présentation) : 
Route::get('/', 'IndexController@index')->name('index');
/* "Page de contact" voir si nécessaire... 
Route::get('/contact/', 'IndexController@contact')->name('contact');
*/
// User - Page de création de compte
Route::get('/nouveau-compte', 'UserController@create')->name('new_account');
Route::post('/creer-compte', 'UserController@store')->name('store_account');
// User - Page de connexion
Route::post('/connection', 'UserController@login')->name('login');
// User - Page de gestion compte (Show modifier pour ne pas afficher l'id user dans url)
Route::get('/compte', 'UserController@show')->name('user_account');

/* User - All user 
Route::get('/accounts', 'UserController@index')->name('all_account'); 
*/

// Project - Page de recherche
Route::get('/mes-projets', 'ProjectController@index')->name('projects_list');
// Project - Détails d'un projet (avec commentaire et possibilité réponse)
Route::get('/projet/{url}', 'ProjectController@show')->name('project');


// Pages des Mentions légales (voir combien seront nécessaire : Au moins une pour l'inscription)