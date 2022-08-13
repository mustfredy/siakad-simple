<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/




$router->get('/', function () use ($router) {
    echo "<center> Welcome </center>";
});

$router->get('/version', function () use ($router) {
    return $router->app->version();
});


Route::group([
    'prefix' => 'api/v1'
], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('user-profile', 'AuthController@me');
    Route::post('upload', 'ExampleController@upload');

    Route::get('tutorials', 'V1\TutorialController@index');
    Route::post('tutorials', 'V1\TutorialController@create'); // create
    Route::get('tutorials/{id}', 'V1\TutorialController@show'); // read
    Route::put('tutorials/{id}', 'V1\TutorialController@update'); // update
    Route::delete('tutorials/{id}', 'V1\TutorialController@delete'); // update


    Route::get('dosen', 'V1\DosenController@index');
    Route::post('dosen', 'V1\DosenController@create'); // create
    Route::get('dosen/{id}', 'V1\DosenController@show'); // read
    Route::put('dosen/{id}', 'V1\DosenController@update'); // update
    Route::delete('dosen/{id}', 'V1\DosenController@delete'); // update

    Route::get('matakuliah', 'V1\MatakuliahController@index');
    Route::post('matakuliah', 'V1\MatakuliahController@create'); // create
    Route::get('matakuliah/{id}', 'V1\MatakuliahController@show'); // read
    Route::put('matakuliah/{id}', 'V1\MatakuliahController@update'); // update
    Route::delete('matakuliah/{id}', 'V1\MatakuliahController@delete'); // update


    Route::get('dosen-matakuliah', 'V1\DosenMatakuliahController@index');
    Route::post('dosen-matakuliah', 'V1\DosenMatakuliahController@create'); // create
    Route::get('dosen-matakuliah/{id}', 'V1\DosenMatakuliahController@show'); // read
    Route::put('dosen-matakuliah/{id}', 'V1\DosenMatakuliahController@update'); // update
    Route::delete('dosen-matakuliah/{id}', 'V1\DosenMatakuliahController@delete'); // update

});

Route::group([
    'prefix' => 'api/v2',
], function ($router) {
    
    
    Route::get('dosen', 'V2\DosenController@index');
    Route::post('dosen', 'V2\DosenController@create'); // create
    Route::get('dosen/{id}', 'V2\DosenController@show'); // read
    Route::put('dosen/{id}', 'V2\DosenController@update'); // update
    Route::delete('dosen/{id}', 'V2\DosenController@delete'); // update


    Route::get('matakuliah', 'V2\MatakuliahController@index');
    Route::post('matakuliah', 'V2\MatakuliahController@create'); // create
    Route::get('matakuliah/{id}', 'V2\MatakuliahController@show'); // read
    Route::put('matakuliah/{id}', 'V2\MatakuliahController@update'); // update
    Route::delete('matakuliah/{id}', 'V2\MatakuliahController@delete'); // update


    Route::get('dosen-matakuliah', 'V2\DosenMatakuliahController@index');
    Route::post('dosen-matakuliah', 'V2\DosenMatakuliahController@create'); // create
    Route::get('dosen-matakuliah/{id}', 'V2\DosenMatakuliahController@show'); // read
    Route::put('dosen-matakuliah/{id}', 'V2\DosenMatakuliahController@update'); // update
    Route::delete('dosen-matakuliah/{id}', 'V2\DosenMatakuliahController@delete'); // update
    
});