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

Route::get('/', function () {
    return view('index');
});

Route::get('todo', "TodoController@index");
Route::get('todo/add', "TodoController@add");
Route::post('todo/create', "TodoController@create");
Route::get('todo/delete/{id}', "TodoController@delete");
Route::get('todo/done/{id}', "TodoController@done");
Route::get('todo/notdone/{id}', "TodoController@notdone");

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
    //
});
