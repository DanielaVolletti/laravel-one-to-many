@extends('layouts.mainLayout')
@section('content')
  <form action="{{route('update', $task['id'])}}" method="post">
    @csrf
    @method('POST')
    <h2>Employee</h2>
    <label for="employee_id">NAME</label>
    <select name="employee_id">
      @foreach ($employees as $employee)
        <option value="{{$employee['id']}}"
          @if ($employee['id'] === $task['employee_id'])
            selected
          @endif
          >
          {{$employee -> firstname}} {{$employee -> lastname}}
        </option>
      @endforeach
    </select>

    <h2>Task</h2>
    <label for="name">NAME</label>
    <input type="text" name="name" value="{{$task -> name}}">
    <br>
    <label for="description">DESCRIPTION</label>
    <input type="text" name="description" value="{{$task -> description}}">
    <br>
    <label for="deadline">DEADLINE</label>
    <input type="text" name="deadline" value="{{$task -> deadline}}">
    <br>
    <input type="submit" name="submit" value="UPDATE">
  </form>
@endsection
