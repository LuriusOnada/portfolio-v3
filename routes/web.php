<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;

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
    if(isset($_GET["recherche"]) && $_GET["recherche"] <> NULL)
    {
        $projects = Project::with('tags')->where('title', 'like', '%'.$_GET["recherche"].'%')->orWhere('resume', 'like', '%'.$_GET["recherche"].'%')->orderBy("updated_at")->get();
    }
    else {
        $projects = Project::with('tags')->orderBy("updated_at")->get();
    }

    return view('project_index', compact("projects"));
})->name('projects_list');

// Project - Détails d'un projet (avec commentaire et possibilité réponse)
Route::get('/projet/{url}', function($url){
    $project = Project::where('url', $url)->with('tags')->first();

    return view('project_show', compact("project"));
})->name('project');


// Pages des Mentions légales (voir combien seront nécessaire -> Chercher pour les articles si textes de loi à indiquer)