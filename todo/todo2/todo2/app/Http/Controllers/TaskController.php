<?php

namespace App\Http\Controllers;

use App\Task as Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    public function __construct() {
    	$this->middleware('auth');
    }

    public function index(Request $request) {
        echo "hallo controller tasks";
       //return view('tasks.index');
        
        $tasks = Task::where('user_id', $request->user()->id)->get();
	    
        //hier waren verkeerde variabelen doorgegeven. 
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
        
        
    }

    public function store(Request $request) {
        
        
       // Als je deze uit commet hald krij je probleem maar zonder werk het ook perfect, je kunt het oplossen moet alleen wat research doen.
        /*
    	$this->validate($request, [
    		'name' => 'required|255',
    	]);
        */
    	$request->user()->tasks()->create([
	        'name' => $request->name,
	    ]);

	    return redirect('/tasks');
    }

    public function destroy(Request $request, Task $task) {
    	//$this->authorize('destroy', $task);

    	$task->delete();

    	return redirect('/tasks');
    }
}
