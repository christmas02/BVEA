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
Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/', 'Home@home');
Route::get('/actualite', 'Home@actualite');
Route::get('/actions', 'Home@nosactions');
Route::get('/implementations', 'Home@nosImplementations');
Route::get('/missions', 'Home@nosMissions');
Route::get('/contacte', 'Home@nousContacter');
Route::get('/soutenir', 'Home@nousSoutenir');
Route::get('/article', 'Home@oneArticle');
Route::get('/quisommenous', 'Home@quiSommesnous');
Route::get('/temoinage', 'Home@temoignages');