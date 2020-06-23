<?php

namespace App\Http\Controllers;

use App\Task;
use App\Employee;
use App\Location;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
      $tasks = Task::all();
      return view('home', compact('tasks'));
    }
    public function edit($id) {
      $task = Task::findOrFail($id);
      $employees = Employee::all();
      $locations = Location::all();
      return view('edit-task', compact('task', 'employees', 'locations'));
    }
    public function update(Request $request, $id) {
      $validateData = $request -> validate([
        'name' => 'required',
        'description' => 'required',
        'deadline' => 'required',
        'employee_id' => 'required',
        'locations' => 'required|array'
      ]);

      $task = Task::findOrFail($id);
      $employee = $task -> employee;
      $task -> name = $validateData['name'];
      $task -> description = $validateData['description'];
      $task -> deadline = $validateData['deadline'];
      $task -> employee_id = $validateData['employee_id'];
      $task -> save();

      $employee -> locations() -> sync($validateData['locations']);

      return redirect() -> route('home');
    }
}
