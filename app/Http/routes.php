<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {

Route::get('/',[
		'uses' => 'PagesController@getHome',
		'as' => 'home'
]);

Route::get('/connexion',[
		'uses' => 'UserController@getLogin',
		'as' => 'getLogin',
	    'middleware' => 'guest'
]);

Route::post('/connexion',[
		'uses' => 'UserController@login',
		'as' => 'login'
]);

Route::get('/consulter/salles',[
		'uses' => 'PagesController@getConsultSalles',
		'as' => 'conSalles'
	]);

Route::get('/consulter/materiels',[
		'uses' => 'PagesController@getConsultMats',
		'as' => 'conMats'
	]);

Route::get('/responsable/accueil',[
		'uses' => 'PagesController@getRespHome',
		'as' => 'respHome',
		'middleware' =>'auth'
	]);

Route::get('/responsable/editer',[
		'uses' => 'PagesController@getEdit',
		'as' => 'respEdit',
		'middleware' =>'auth'
	]);

Route::get('/enseignant/accueil',[
		'uses' => 'PagesController@getEnsHome',
		'as' => 'ensHome',
		'middleware' => 'auth'
	]);
Route::get('/enseignant/reserver',[
		'uses' => 'PagesController@getEnsRes',
		'as' => 'ensRes',
		'middleware' => 'auth'
	]);

Route::post('/enseignant/reserver/salle',[
		'uses' => 'UserController@Reserver',
		'as' => 'reserverSalle',
		'middleware' => 'auth'
	]);
Route::post('/enseignant/reserver/materiel',[
		'uses' => 'UserController@reserverMateriel',
		'as' => 'reserverMateriel',
		'middleware' => 'auth'
	]);
Route::get('/etudiants/accueil',[
		'uses' => 'PagesController@getEtuHome',
		'as' => 'etuHome'
	]);
Route::get('/deconnexion',[
	'uses' => 'UserController@logout',
	'as' => 'deconnexion'
	]);
});

