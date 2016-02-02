<?php



Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/tasks', 'TaskController@index');
    /*
    Route::get('/tasks', function(){
        //echo "hallo tasks";
         return view('tasks.index');
    });
    */
	Route::post('/task', 'TaskController@store');
	//Route::delete('/task/{task}', 'TaskController@destroy');
    
    Route::get('/home', 'HomeController@index');
});
