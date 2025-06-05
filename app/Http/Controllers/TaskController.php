<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request->title,
            'completed' => false
        ]);

        return response()->json($task, 201);
    }

    public function markCompleted($id)
    {
        $task = Task::findOrFail($id);
        $task->completed = true;
        $task->save();

        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(['message' => 'Task deleted']);
    }
}
