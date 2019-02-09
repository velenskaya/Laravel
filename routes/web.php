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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('page', function(){
	return 'первая страница page в Laravel';
});
*/

Route::get('page', 'IndexController@indexPage');

Route::get('/', 'IndexController@index');

//->name('articleShow') псевдоним для обращения к маршруту для формирования ссылок к и обращений к этому маршруту
Route::get('article/{id}', 'IndexController@show')->name('articleShow');