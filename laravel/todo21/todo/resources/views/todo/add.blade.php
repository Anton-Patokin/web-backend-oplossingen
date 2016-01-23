@extends('default')
@section('content')
  <div class="container">
    <hgroup>
      <h1>Maak nieuwe todo</h1>
      <a href="/todo">Terug</a>
    </hgroup>
    <br />
    {!! Form::open(array("action" => "TodoController@create")) !!}
      <fieldset class="form-group">
        {!! Form::text('text', null, array('class' => 'form-control')) !!}
      </fieldset>
      <fieldset class="form-group">
        {!! Form::submit('Maak Todo', array('class' => 'btn btn-primary')) !!}
      </fieldset>
    {!! Form::close() !!}
  </div>
@stop
