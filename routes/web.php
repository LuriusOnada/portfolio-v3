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
Route::get('/', function(){
    return view('index');
})->name('index');

// Project - Page de recherche
Route::get('/mes-projets', function(){
    return view('project_index');
})->name('projects_list');
// Project - Détails d'un projet (avec commentaire et possibilité réponse)
Route::get('/projet/{url}', function(){
    return view('project_show');
})->name('project');


// Pages des Mentions légales (voir combien seront nécessaire -> Chercher pour les articles si textes de loi à indiquer)


/* Plus de page de contact, directement des redirections et mailto dans footer */
/* Suppression de la gestion des comptes (plus de commentaire sur le site) -> Fonctions inutiles voir dangereuse. + Réduction temp de travail */