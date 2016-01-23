<?php

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {

    /**
     * Show Task Dashboard
     */
    Route::get('/', 'TodoController@index');
    
    
     Route::get('/user', function () {
       

        return view('user');
    });
    
    
    Route::get('/blabla','TodoController@index');
   

    /**
     * Add New Task
     */
    Route::post('/task','TodoController@post' );

    /**
     * Delete Task
     */
    Route::delete('/task/{task}', function (Task $task) {
         $task->delete();

        return redirect('/');
    });
    
    Route::get('custumer',function(){
        echo "hallo custmer";
        $todo = Task::where('name','=', 'sqf')->first();
        print_r($todo->id);
    });
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
