<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class TaskController extends Controller
{
    public function index()
    {
        try {
            $tasks = Task::all();
            return response()->json($tasks, 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Failed to fetch tasks from database'], 500);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        try {
            $task = Task::create([
                'title' => $request->title,
                'completed' => false
            ]);
            return response()->json($task, 201);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Failed to create task in database'], 500);
        }
    }

    public function markCompleted($id)
    {
        try {
            $task = Task::findOrFail($id);
            $task->completed = true;
            $task->save();
            return response()->json($task, 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Failed to update task in database'], 500);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Task not found'], 404);
        }
    }

    public function destroy($id)
    {
        try {
            $task = Task::findOrFail($id);
            $task->delete();
            return response()->json(['message' => 'Task deleted'], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Failed to delete task from database'], 500);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Task not found'], 404);
        }
    }
}