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
      
      return redirect() -> route('home');
    }
}
