@extends('default')
@section('content')
  <div class="container">
    <h1>Todo's</h1>
    @if(Session::get("error"))
      <div class="alert alert-danger">{{ Session::get("error") }}
    @endif
    <h2>Te doen</h2>
    <ul>
      @foreach($todos as $todo)
        @if(!$todo->done)
          <li>{{ $todo->text }} - <a href="/todo/delete/{{ $todo->id }}">Verwijder</a> - <a href="/todo/done/{{ $todo->id }}">Gedaan</a></li>
        @endif
      @endforeach
    </ul>
    <h2>Klaar</h2>
    <ul>
      @foreach($todos as $todo)
        @if($todo->done)
          <li>{{ $todo->text }}- <a href="/todo/delete/{{ $todo->id }}">Verwijder</a> - <a href="/todo/notdone/{{ $todo->id }}">Niet gedaan</a></li>
        @endif
      @endforeach
    </ul>
    <a href="/todo/add" class="btn btn-default">Maak Todo</a>
  </div>
@stop
