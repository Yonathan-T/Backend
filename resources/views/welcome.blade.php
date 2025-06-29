<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel API Backend</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-6">
        <div class="text-center mb-8">
            <a href="https://laravel.com" target="_blank">
                <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
                    width="400" alt="Laravel Logo" class="mx-auto">
            </a>
        </div>

        <hr class="my-8">

        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-4">📘 Laravel API Backend</h2>
            <p class="text-lg">This is a deployed Laravel API backend built with Laravel 12, designed to handle task
                management features. You are currently on the API's guide page at <a
                    href="https://simple-task-api-88g5.onrender.com"
                    class="text-blue-600 hover:underline">https://simple-task-api-88g5.onrender.com</a>. which means its
                working 😁</p>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">🚀 Features</h2>
            <ul class="list-disc list-inside text-lg">
                <li>RESTful API for tasks (GET, POST, PUT, DELETE)</li>
                <li>User registration and management with UUID support</li>
                <li>User-specific task isolation</li>
                <li>Stateless API routes without CSRF</li>
                <li>Built using Laravel 12</li>
            </ul>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">🏃‍♂️ Accessing the API</h2>
            <p class="text-lg">The API is live and accessible at <a href="https://simple-task-api-88g5.onrender.com"
                    class="text-blue-600 hover:underline">https://simple-task-api-88g5.onrender.com</a>. This page
                provides a guide to the available endpoints.</p>
            <p class="text-lg mt-2"><strong>Base URL:</strong> <code>https://simple-task-api-88g5.onrender.com/api</code></p>
            <p class="text-lg mt-2"><strong>Important:</strong> All task endpoints require a <code>X-User-ID</code> header with a valid UUID for user identification.</p>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">🧪 API Testing (Because Guessing Is Not a Strategy)</h2>

            <h3 class="text-xl font-semibold mb-2">1. Check API is Running</h3>
            <p><strong>Request:</strong> <code>GET https://simple-task-api-88g5.onrender.com/api/</code></p>
            <p><strong>Response:</strong></p>
            <pre
                class="bg-gray-800 text-white p-4 rounded"><code><h1 style='font-family:sans-serif;'>✅ API is running</h1></code></pre>

            <h3 class="text-xl font-semibold mb-2">2. Register a User</h3>
            <p><strong>Request:</strong> <code>POST https://simple-task-api-88g5.onrender.com/api/register</code></p>
            <p><strong>Headers:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>X-User-ID: 550e8400-e29b-41d4-a716-446655440000
Content-Type: application/json</code></pre>
            <p><strong>Response:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>{
  "message": "User registered successfully",
  "user": {
    "id": "550e8400-e29b-41d4-a716-446655440000",
    "created_at": "2025-06-06T08:00:00.000000Z",
    "updated_at": "2025-06-06T08:00:00.000000Z"
  }
}</code></pre>

            <h3 class="text-xl font-semibold mb-2">3. Create a New Task</h3>
            <p><strong>Request:</strong> <code>POST https://simple-task-api-88g5.onrender.com/api/task</code></p>
            <p><strong>Headers:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>X-User-ID: 550e8400-e29b-41d4-a716-446655440000
Content-Type: application/json</code></pre>
            <p><strong>Body (Raw JSON):</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>{
  "title": "Getting Peace of mind (and maybe a job)"
}</code></pre>
            <p><strong>Response:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>{
  "id": 1,
  "user_id": "550e8400-e29b-41d4-a716-446655440000",
  "title": "Getting Peace of mind (and maybe a job)",
  "completed": false,
  "created_at": "2025-06-06T08:00:00.000000Z",
  "updated_at": "2025-06-06T08:00:00.000000Z"
}</code></pre>

            <h3 class="text-xl font-semibold mb-2">4. List All Tasks (User-specific)</h3>
            <p><strong>Request:</strong> <code>GET https://simple-task-api-88g5.onrender.com/api/tasks</code></p>
            <p><strong>Headers:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>X-User-ID: 550e8400-e29b-41d4-a716-446655440000</code></pre>
            <p><strong>Response:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>[
  {
    "id": 1,
    "user_id": "550e8400-e29b-41d4-a716-446655440000",
    "title": "Getting Peace of mind (and maybe a job)",
    "completed": false,
    "created_at": "2025-06-06T08:00:00.000000Z",
    "updated_at": "2025-06-06T08:00:00.000000Z"
  }
]</code></pre>

            <h3 class="text-xl font-semibold mb-2">5. Get a Specific Task</h3>
            <p><strong>Request:</strong> <code>GET https://simple-task-api-88g5.onrender.com/api/task/{id}</code></p>
            <p><strong>Headers:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>X-User-ID: 550e8400-e29b-41d4-a716-446655440000</code></pre>
            <p><strong>Example:</strong> <code>GET https://simple-task-api-88g5.onrender.com/api/task/1</code></p>
            <p><strong>Response:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>{
  "id": 1,
  "user_id": "550e8400-e29b-41d4-a716-446655440000",
  "title": "Getting Peace of mind (and maybe a job)",
  "completed": false,
  "created_at": "2025-06-06T08:00:00.000000Z",
  "updated_at": "2025-06-06T08:00:00.000000Z"
}</code></pre>

            <h3 class="text-xl font-semibold mb-2">6. Mark a Task as Completed</h3>
            <p><strong>Request:</strong> <code>PUT https://simple-task-api-88g5.onrender.com/api/task/{id}</code></p>
            <p><strong>Headers:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>X-User-ID: 550e8400-e29b-41d4-a716-446655440000
Content-Type: application/json</code></pre>
            <p><strong>Example:</strong> <code>PUT https://simple-task-api-88g5.onrender.com/api/task/1</code></p>
            <p><strong>Response:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>{
  "id": 1,
  "user_id": "550e8400-e29b-41d4-a716-446655440000",
  "title": "Getting Peace of mind (and maybe a job)",
  "completed": true,
  "created_at": "2025-06-06T08:10:00.000000Z",
  "updated_at": "2025-06-06T08:15:00.000000Z"
}</code></pre>

            <h3 class="text-xl font-semibold mb-2">7. Delete a Task</h3>
            <p><strong>Request:</strong> <code>DELETE https://simple-task-api-88g5.onrender.com/api/task/{id}</code></p>
            <p><strong>Headers:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>X-User-ID: 550e8400-e29b-41d4-a716-446655440000</code></pre>
            <p><strong>Example:</strong> <code>DELETE https://simple-task-api-88g5.onrender.com/api/task/1</code></p>
            <p><strong>Response:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>{
  "message": "Task deleted"
}</code></pre>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">🔑 API Endpoints Summary</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Method</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Endpoint</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Headers Required</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">GET</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>/api/</code></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Check API status</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">None</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">POST</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>/api/register</code></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Register a new user</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>X-User-ID</code></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">GET</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>/api/tasks</code></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Get all tasks for user</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>X-User-ID</code></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">GET</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>/api/task/{id}</code></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Get specific task</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>X-User-ID</code></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">POST</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>/api/task</code></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Create new task</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>X-User-ID</code></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">PUT</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>/api/task/{id}</code></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mark task as completed</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>X-User-ID</code></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">DELETE</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>/api/task/{id}</code></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Delete task</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><code>X-User-ID</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">🚨 Important Notes</h2>
            <ul class="list-disc list-inside text-lg space-y-2">
                <li><strong>User Isolation:</strong> Each user can only access their own tasks</li>
                <li><strong>UUID Required:</strong> All task operations require a valid UUID in the <code>X-User-ID</code> header</li>
                <li><strong>Auto-registration:</strong> Users are automatically created when they first create a task</li>
                <li><strong>Error Handling:</strong> API returns appropriate HTTP status codes and error messages</li>
            </ul>
        </section>

        <footer class="text-center text-lg">
            <p>Happy Testing! 🚀</p>
        </footer>
    </div>
</body>

</html>