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
    return view('welcome');
});

Route::match(['get', 'post'], '/create-article', 'ArticleController@createArticle');

Route::get('/view-article/{id}', 'ArticleController@viewArticle');

Route::get('/show-articles', 'ArticleController@showArticles');

Route::get('/delete-article/{id}', 'ArticleController@deleteArticle');

Route::match(['get', 'post'], '/update-article/{id}', 'ArticleController@updateArticle');
