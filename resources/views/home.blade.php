@extends('layouts.mainLayout')

@section('content')
  <ul>
    @foreach ($tasks as $task)
      <li>
        <h2>
          Name: {{$task -> employee -> firstname}}
          {{$task -> employee -> lastname}}
        </h2>
        <h3>Role : {{ $task -> employee -> role}}</h3>
        <p><b>Task: </b>{{$task -> name}}.
          <br>
          <b>Description :</b>{{$task -> description}}
        </p>
      </li>
      <br>
    @endforeach
  </ul>
@endsection
