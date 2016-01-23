<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Todo extends Model
{
    public function getTodos()
    {
      return DB::table("todos")->get();
    }

    public function done($id)
    {
      return DB::table("todos")
      ->where('id', $id)
      ->update(array("done" => true));
    }

    public function notDone($id)
    {
      return DB::table("todos")
      ->where('id', $id)
      ->update(array("done" => false));
    }

    public function deleteTodo($id)
    {
      return DB::table("todos")->delete($id);
    }

    public function createTodo($text, $done)
    {
      return DB::table("todos")->insert(array(
        'text' => $text,
        'done' => $done
      ));
    }
}
