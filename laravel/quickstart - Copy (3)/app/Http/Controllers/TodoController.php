<?php


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Task as Task;

class TodoController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tasks = Task::orderBy('created_at', 'asc')->get();
        //echo "hallo in todoconstructor";
        //print_r($tasks);
        
        return view('tasks', [
            'tasks' => $tasks
        ]);
        
    }
    
    
    public function post(Request $request)
    {
        echo "post";
        print_r($request);
        
     $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        //print_r($request->name);
        //return redirect('/');
        
    }
}