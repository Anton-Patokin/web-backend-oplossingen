<?php

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {
Route::auth();
    /**
     * Show Task Dashboard
     */
    Route::get('/', 'TodoController@index');
    
    
    Route::get('/blabla','TodoController@index');
    /**
     * Add New Task
     */
    Route::post('/task','TodoController@post' );
    /**
     * Delete Task
     */
    Route::delete('/task/{task}', 'TodoController@delete');
    
      Route::get('/home', 'HomeController@index');
});

