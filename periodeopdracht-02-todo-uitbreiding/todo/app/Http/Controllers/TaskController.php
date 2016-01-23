<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task as Task;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $tasks = Task::where('user_id', $request->user()->id)->get();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
    
        /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        // Create The Task...
         $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

    return redirect('/tasks');
    }
    
    public function destroy(Request $request, Task $task)
    {
        //$this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
     public function put($done, Task $task)
    {
         
         //echo $done."<br>";
         //var_dump($task);
         //echo "hallo";
         //var_dump($request-done);
         //echo $done ."<br>";
         //var_dump($task->id);
         //echo $task->id;
         //$task->done();
         //$task->done($done);
         //var_dump($task->done);
         //echo "hallo";
         
         //Task->done($task-id) = $request->name;
            //$numberOfDone = Task::findOrFail($task->id)->done(1);
         //$numberOfDone = Task::update(array('done' => 1));
            //echo $numberOfDone;
         //Task::findOrFail($task->id)->done->save();
         //var_dump($taskss);
         //var_dump(Task->done;
         //echo "hallo";
         /*
       $taskssss = Task::where('user_id', $request->user()->id)->get();
          foreach ($taskssss as $task){
              echo $task->done;
          }
         */
         //return redirect('/tasks');
         
         
         Task::where('id', $task->id)->update(['done' => $done]);
         return redirect('/tasks');
    }
    
}