<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//list all articles
Route::get('articles', 'ArticleController@index');

//get single srticle
Route::get('article/{id}', 'ArticleController@show');

//update and creating new articles uses the same method but different request type
//create new article
Route::post('article', 'ArticleController@store');

//update article
Route::put('article', 'ArticleController@store');

//delete article
Route::delete('article/{id}', 'ArticleController@destroy');

//you get all this methods: store, destroy, etc automatically created with this command
//php artisan make:controller VictorController --resource