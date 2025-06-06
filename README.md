<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

---

## 📘 Laravel API Backend

This is a Laravel API backend built with Laravel 12, designed to handle task management features. It is intended to be used with Laravel Herd for local development.

---

### 🚀 Features

-   RESTful API for tasks (GET, POST, PUT, DELETE)
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

Edit .env as needed (set DB_CONNECTION, etc.) 4. Generate application key

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

---

### 🧪 API Testing with Postman

#### 1. **Check API is Running**

-   **Request:**  
    `GET http://backend.test/api/`
-   **Response:**

```
<h1 style='font-family:sans-serif;'>✅ API is running </h1>
```

#### 2. **Create a New Task**

-   **Request:**  
    `POST http://backend.test/api/tasks` -**Body (Raw JSON)**

```
 {
 "title": "Finish Laravel internship task"
}
```

-   **Response:**

```
[
  {
    "id": 1,
    "title": "Finish Laravel internship task",
    "completed": false,
    "created_at": "2025-06-06T08:00:00.000000Z",
    "updated_at": "2025-06-06T08:00:00.000000Z"
  }
]

```

#### 3. **List All Tasks**

-   **Request:**  
    `GET http://backend.test/api/tasks`
-   **Response:**

```
[
  {
    "id": 1,
    "title": "Finish Laravel internship task",
    "completed": false,
    "created_at": "2025-06-06T08:00:00.000000Z",
    "updated_at": "2025-06-06T08:00:00.000000Z"
  }
]

```

### 4. **Mark a Task as Completed**

-   **Request:**
    `PUT http://backend.test/api/tasks/{id}`
-   **Example:**
    `PUT http://backend.test/api/tasks/1` -**Response Example:**

```
{
  "id": 1,
  "title": "Finish Laravel internship task",
  "completed": true,
  "created_at": "2025-06-06T08:10:00.000000Z",
  "updated_at": "2025-06-06T08:15:00.000000Z"
}

```

### 5. **Delete a Task**

-**Request:**
`DELETE http://backend.test/api/tasks/{id}` -**Example:**
`DELETE http://backend.test/api/tasks/1`

-**Response Example:**

```
{
  "message": "Task deleted"
}
```

Happy Testing! 🚀
