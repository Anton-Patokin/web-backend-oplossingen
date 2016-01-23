<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Todo;


class TodoController extends Controller
{
  public function done($id, Todo $todo)
  {
    $todo->done($id);
    return redirect('todo');
  }

  public function notdone($id, Todo $todo)
  {
    $todo->notDone($id);
    return redirect('todo');
  }

  public function delete($id, Todo $todo)
  {
    $todo->deleteTodo($id);
    return redirect('todo');
  }

  public function create(Todo $todo)
  {
    $text = Input::get('text');

    if(!$todo->createTodo($text, false))
    {
      Session::put("error", "Kon todo niet aanmaken");
    }

    return redirect('todo');
  }

  public function add()
  {
    return view('todo/add');
  }

  public function index(Todo $todo)
  {
    $todos = $todo->getTodos();
    return view('todo/index', compact('todos'));
  }

}
