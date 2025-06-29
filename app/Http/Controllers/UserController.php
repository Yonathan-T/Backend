<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    public function register(Request $request)
    {
        try {
            $userId = $request->header('X-User-ID');
            if (!$userId) {
                return response()->json(['error' => 'User ID required'], 400);
            }

            $existingUser = User::find($userId);
            if ($existingUser) {
                return response()->json(['message' => 'User already exists', 'user' => $existingUser], 200);
            }

            $user = User::create(['id' => $userId]);

            return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Failed to register user in database'], 500);
        }
    }
}