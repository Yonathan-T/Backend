<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

---

## 📘 Laravel API Backend

This is a Laravel API backend built with Laravel 12, designed to handle task management features. It is intended to be used with Laravel Herd for local development.

**🌐 Live Demo:** [https://simple-task-api-88g5.onrender.com/]

---

### 🚀 Features

-   RESTful API for tasks (GET, POST, PUT, DELETE)
-   User registration and management with UUID support
-   User-specific task isolation
-   CSRF protection on web routes
-   Stateless API routes without CSRF (via `routes/api.php`)
-   Built using Laravel 12 + Herd

---

### 📦 Requirements

-   PHP 8.1+
-   Laravel 12.x
-   Laravel Herd (or `php artisan serve`)
-   Composer

---

### 🔧 Installation

1. Clone the repository

```
git clone <https://github.com/Yonathan-T/Backend>
cd <To-Your-repo-folder>
```

2. Install dependencies

```
composer install
```

3. Copy and edit your environment file

```
cp .env.example .env
```

Edit .env as needed (set DB_CONNECTION, etc.)

4. Generate application key

```
php artisan key:generate
```

5. Run database migrations

```
   php artisan migrate
```

6. (Optional) Seed the database

```
   php artisan db:seed
```

7. Start the development server
   If using Herd, just run:

```
   herd start
```

Or with artisan:

```
php artisan serve
```

---

### 🏃‍♂️ Running the App

-   **With Laravel Herd:**  
    The app will be available at [http://backend.test](http://backend.test) (or your configured Herd domain).
-   **With Artisan Serve:**  
    The app will be available at [http://localhost:8000](http://localhost:8000).
-   **Production:**  
    The app is deployed at [https://simple-task-api-88g5.onrender.com/](https://simple-task-api-88g5.onrender.com/)

---

### 🧪 API Testing with Postman

**Base URL:** `https://simple-task-api-88g5.onrender.com/api`

**Important:** All task endpoints require a `X-User-ID` header with a valid UUID for user identification.

#### 1. **Check API is Running**

-   **Request:**  
    `GET https://simple-task-api-88g5.onrender.com/api/`
-   **Response:**

```
<h1 style='font-family:sans-serif;'>✅ API is running </h1>
```

#### 2. **Register a User**

-   **Request:**  
    `POST https://simple-task-api-88g5.onrender.com/api/register`
-   **Headers:**
    ```
    X-User-ID: 550e8400-e29b-41d4-a716-446655440000
    Content-Type: application/json
    ```
-   **Response:**

```
{
  "message": "User registered successfully",
  "user": {
    "id": "550e8400-e29b-41d4-a716-446655440000",
    "created_at": "2025-06-06T08:00:00.000000Z",
    "updated_at": "2025-06-06T08:00:00.000000Z"
  }
}
```

#### 3. **Create a New Task**

-   **Request:**  
    `POST https://simple-task-api-88g5.onrender.com/api/task`
-   **Headers:**
    ```
    X-User-ID: 550e8400-e29b-41d4-a716-446655440000
    Content-Type: application/json
    ```
-   **Body (Raw JSON):**

```
{
  "title": "Finish Laravel internship task"
}
```

-   **Response:**

```
{
  "id": 1,
  "user_id": "550e8400-e29b-41d4-a716-446655440000",
  "title": "Finish Laravel internship task",
  "completed": false,
  "created_at": "2025-06-06T08:00:00.000000Z",
  "updated_at": "2025-06-06T08:00:00.000000Z"
}
```

#### 4. **List All Tasks (User-specific)**

-   **Request:**  
    `GET https://simple-task-api-88g5.onrender.com/api/tasks`
-   **Headers:**
    ```
    X-User-ID: 550e8400-e29b-41d4-a716-446655440000
    ```
-   **Response:**

```
[
  {
    "id": 1,
    "user_id": "550e8400-e29b-41d4-a716-446655440000",
    "title": "Finish Laravel internship task",
    "completed": false,
    "created_at": "2025-06-06T08:00:00.000000Z",
    "updated_at": "2025-06-06T08:00:00.000000Z"
  }
]
```

#### 5. **Get a Specific Task**

-   **Request:**  
    `GET https://simple-task-api-88g5.onrender.com/api/task/{id}`
-   **Headers:**
    ```
    X-User-ID: 550e8400-e29b-41d4-a716-446655440000
    ```
-   **Example:**
    `GET https://simple-task-api-88g5.onrender.com/api/task/1`
-   **Response:**

```
{
  "id": 1,
  "user_id": "550e8400-e29b-41d4-a716-446655440000",
  "title": "Finish Laravel internship task",
  "completed": false,
  "created_at": "2025-06-06T08:00:00.000000Z",
  "updated_at": "2025-06-06T08:00:00.000000Z"
}
```

#### 6. **Mark a Task as Completed**

-   **Request:**
    `PUT https://simple-task-api-88g5.onrender.com/api/task/{id}`
-   **Headers:**
    ```
    X-User-ID: 550e8400-e29b-41d4-a716-446655440000
    Content-Type: application/json
    ```
-   **Example:**
    `PUT https://simple-task-api-88g5.onrender.com/api/task/1`
-   **Response:**

```
{
  "id": 1,
  "user_id": "550e8400-e29b-41d4-a716-446655440000",
  "title": "Finish Laravel internship task",
  "completed": true,
  "created_at": "2025-06-06T08:10:00.000000Z",
  "updated_at": "2025-06-06T08:15:00.000000Z"
}
```

#### 7. **Delete a Task**

-   **Request:**
    `DELETE https://simple-task-api-88g5.onrender.com/api/task/{id}`
-   **Headers:**
    ```
    X-User-ID: 550e8400-e29b-41d4-a716-446655440000
    ```
-   **Example:**
    `DELETE https://simple-task-api-88g5.onrender.com/api/task/1`
-   **Response:**

```
{
  "message": "Task deleted"
}
```

---

### 🔑 API Endpoints Summary

| Method | Endpoint         | Description            | Headers Required |
| ------ | ---------------- | ---------------------- | ---------------- |
| GET    | `/api/`          | Check API status       | None             |
| POST   | `/api/register`  | Register a new user    | `X-User-ID`      |
| GET    | `/api/tasks`     | Get all tasks for user | `X-User-ID`      |
| GET    | `/api/task/{id}` | Get specific task      | `X-User-ID`      |
| POST   | `/api/task`      | Create new task        | `X-User-ID`      |
| PUT    | `/api/task/{id}` | Mark task as completed | `X-User-ID`      |
| DELETE | `/api/task/{id}` | Delete task            | `X-User-ID`      |

---

### 🚨 Important Notes

-   **User Isolation**: Each user can only access their own tasks
-   **UUID Required**: All task operations require a valid UUID in the `X-User-ID` header
-   **Auto-registration**: Users are automatically created when they first create a task
-   **Error Handling**: API returns appropriate HTTP status codes and error messages

Happy Testing! 🚀
