<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        return response()->json(Task::all());
    }

    public function store(Request $request) {
        $task = Task::create($request->validate([
            'title' => 'required|string|max:255',
            'completed' => 'boolean'
        ]));

        return response()->json($task, 201);
    }

    public function update(Request $request, Task $task) {
        $task->update($request->validate([
            'title' => 'string|max:255',
            'completed' => 'boolean'
        ]));

        return response()->json($task);
    }

    public function destroy(Task $task) {
        $task->delete();
        return response()->json(null, 204);
    }
}
