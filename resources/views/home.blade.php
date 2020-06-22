@extends('layouts.mainLayout')

@section('content')
  <ul>
    @foreach ($tasks as $task)
      <li>
        <h3>
          Name: {{$task -> employee -> firstname}}
          {{$task -> employee -> lastname}}
        </h3>
        <h3>Role : {{ $task -> employee -> role}}</h3>
        <p><b>Task: </b>{{$task -> name}}.
          <br>
          <b>Description :</b>{{$task -> description}}
        </p>
      </li>
      <a href="{{ route('edit', $task['id']) }}">EDIT TASK</a>
      <br>
      <br>
    @endforeach
  </ul>
@endsection
