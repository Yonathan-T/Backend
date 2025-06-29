<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        try {
            $userId = $request->header('X-User-ID');
            if (!$userId) {
                return response()->json(['error' => 'User ID required'], 400);
            }
            $tasks = Task::where('user_id', $userId)->get();
            return response()->json($tasks, 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Failed to fetch tasks from database'], 500);
        }
    }

    public function show(Request $request, $id)
    {
        try {
            $userId = $request->header('X-User-ID');
            if (!$userId) {
                return response()->json(['error' => 'User ID required'], 400);
            }
            $task = Task::where('user_id', $userId)->findOrFail($id);
            return response()->json($task, 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Task not found'], 404);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Failed to fetch task from database'], 500);
        }
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        try {
            $userId = $request->header('X-User-ID');
            if (!$userId) {
                return response()->json(['error' => 'User ID required'], 400);
            }
            $user = User::find($userId);
            if (!$user) {
                $user = User::create(['id' => $userId]);
            }
            $task = Task::create([
                'title' => $request->title,
                'completed' => false,
                'user_id' => $userId,
            ]);
            return response()->json($task, 201);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Failed to create task in database'], 500);
        }
    }

    public function markCompleted(Request $request, $id)
    {
        try {
            $userId = $request->header('X-User-ID');
            if (!$userId) {
                return response()->json(['error' => 'User ID required'], 400);
            }
            $task = Task::where('user_id', $userId)->findOrFail($id);
            $task->completed = true;
            $task->save();
            return response()->json($task, 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Failed to update task in database'], 500);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Task not found'], 404);
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            $userId = $request->header('X-User-ID');
            if (!$userId) {
                return response()->json(['error' => 'User ID required'], 400);
            }
            $task = Task::where('user_id', $userId)->findOrFail($id);
            $task->delete();
            return response()->json(['message' => 'Task deleted'], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Failed to delete task from database'], 500);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Task not found'], 404);
        }
    }
}