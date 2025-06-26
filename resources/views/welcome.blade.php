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
                <li>Stateless API routes without CSRF</li>
                <li>Built using Laravel 12</li>
            </ul>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">🏃‍♂️ Accessing the API</h2>
            <p class="text-lg">The API is live and accessible at <a href="https://simple-task-api-88g5.onrender.com"
                    class="text-blue-600 hover:underline">https://simple-task-api-88g5.onrender.com</a>. This page
                provides a guide to the available endpoints.</p>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">🧪 API Testing with Postman</h2>

            <h3 class="text-xl font-semibold mb-2">1. Check API is Running</h3>
            <p><strong>Request:</strong> <code>GET https://simple-task-api-88g5.onrender.com/</code></p>
            <p><strong>Response:</strong></p>
            <pre
                class="bg-gray-800 text-white p-4 rounded"><code><h1 style='font-family:sans-serif;'> You're already on the page, which means it's working! No need to test... unless you're the kind of freak who tests even without this guide 👀</h1></code></pre>

            <h3 class="text-xl font-semibold mb-2">2. Create a New Task</h3>
            <p><strong>Request:</strong> <code>POST https://simple-task-api-88g5.onrender.com/tasks</code></p>
            <p><strong>Body (Raw JSON):</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>{
    "title": "Getting Peace of mind (and maybe a job)"
}</code></pre>
            <p><strong>Response:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>[
    {
        "id": 1,
        "title": "Getting Peace of mind (and maybe a job)",
        "completed": false,
        "created_at": "2025-06-06T08:00:00.000000Z",
        "updated_at": "2025-06-06T08:00:00.000000Z"
    }
]</code></pre>

            <h3 class="text-xl font-semibold mb-2">3. List All Tasks</h3>
            <p><strong>Request:</strong> <code>GET https://simple-task-api-88g5.onrender.com/tasks</code></p>
            <p><strong>Response:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>[
    {
        "id": 1,
        "title": "Getting Peace of mind (and maybe a job)",
        "completed": false,
        "created_at": "2025-06-06T08:00:00.000000Z",
        "updated_at": "2025-06-06T08:00:00.000000Z"
    }
]</code></pre>

            <h3 class="text-xl font-semibold mb-2">4. Mark a Task as Completed</h3>
            <p><strong>Request:</strong> <code>PUT https://simple-task-api-88g5.onrender.com/tasks/{id}</code></p>
            <p><strong>Example:</strong> <code>PUT https://simple-task-api-88g5.onrender.com/tasks/1</code></p>
            <p><strong>Response Example:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>{
    "id": 1,
    "title": "Getting Peace of mind (and maybe a job)",
    "completed": true,
    "created_at": "2025-06-06T08:10:00.000000Z",
    "updated_at": "2025-06-06T08:15:00.000000Z"
}</code></pre>

            <h3 class="text-xl font-semibold mb-2">5. Delete a Task</h3>
            <p><strong>Request:</strong> <code>DELETE https://simple-task-api-88g5.onrender.com/tasks/{id}</code></p>
            <p><strong>Example:</strong> <code>DELETE https://simple-task-api-88g5.onrender.com/tasks/1</code></p>
            <p><strong>Response Example:</strong></p>
            <pre class="bg-gray-800 text-white p-4 rounded"><code>{
    "message": "Task deleted"
}</code></pre>
        </section>

        <footer class="text-center text-lg">
            <p>Happy Testing! 🚀</p>
        </footer>
    </div>
</body>

</html>