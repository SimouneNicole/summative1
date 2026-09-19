# Tasks for Today Management System (TSA1)

[![Framework](https://img.shields.io/badge/Framework-CodeIgniter%204-EF4444?style=flat-square&logo=codeigniter&logoColor=white)](https://codeigniter.com/)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/License-MIT-blue?style=flat-square)](LICENSE)

A web-based personal task management application developed for **IT0049 (Technical Summative Assessment 1 — TSA1)** using the **CodeIgniter 4 PHP Framework** and **MySQL**. The system demonstrates Model-View-Controller (MVC) architecture, query builder integration, relational data modeling, and clean user interface rendering.

---

## Features

- **Today's Agenda Workspace (`/`)**: Automatically queries and filters tasks assigned to the current calendar date (`CURDATE()`), giving the user an immediate daily plan.
- **Comprehensive Archive Master List (`/tasks`)**: Displays all recorded tasks sorted chronologically by due date, complete with status tags (`pending` or `completed`).
- **User Account Profile (`/profile`)**: Fetches demo user profile data from the database, displaying User ID, username, full name, email, and registration timestamp.
- **System Engineering Credits (`/about`)**: Application overview, architectural summary, and developer attribution.

---

## Tech Stack

- **Backend**: CodeIgniter 4 (PHP 8.2+)
- **Architecture**: Model-View-Controller (MVC)
- **Database**: MySQL / MariaDB
- **Frontend**: Semantic HTML5, CSS3

---

## Application Structure

```text
Summative1/
├── app/
│   ├── Config/              # Routing, database, and system configuration
│   ├── Controllers/         # Application controllers
│   │   ├── BaseController.php
│   │   └── TaskSystem.php   # Main controller handling all assessment views
│   ├── Models/              # Data access models
│   │   ├── TaskModel.php    # Tasks table operations (today & ordered list)
│   │   └── UserModel.php    # Users table operations (profile fetch)
│   └── Views/               # UI presentation layer
│       ├── about_page.php        # Developer credits view
│       ├── profile_page.php      # User account details view
│       ├── task_list_page.php    # Comprehensive task list view
│       └── welcome_message.php   # Today's agenda view
├── public/                  # Document root
│   ├── index.php            # Front controller
│   └── .htaccess            # URL rewrite rules
├── system/                  # CodeIgniter 4 core framework files
├── writable/                # Cache, logs, and session storage
├── database.sql             # MySQL schema and seed data export
├── env.example              # Environment configuration template
├── env.infinityfree         # Pre-configured template for shared hosting
└── index.php                # Root front controller redirect for shared hosts
```

---

## Database Schema

Defined in [`database.sql`](database.sql):

### 1. `users` Table
| Column | Type | Constraints | Description |
|---|---|---|---|
| `id` | `INT` | `AUTO_INCREMENT`, `PRIMARY KEY` | Unique identifier |
| `username` | `VARCHAR(50)` | `NOT NULL`, `UNIQUE` | User login handle |
| `full_name` | `VARCHAR(100)` | `NOT NULL` | Full legal / display name |
| `email` | `VARCHAR(100)` | `NOT NULL` | Account email address |
| `created_at` | `DATETIME` | `NOT NULL` | Account registration time |

### 2. `tasks` Table
| Column | Type | Constraints | Description |
|---|---|---|---|
| `id` | `INT` | `AUTO_INCREMENT`, `PRIMARY KEY` | Unique task identifier |
| `title` | `VARCHAR(150)` | `NOT NULL` | Description of task |
| `status` | `VARCHAR(20)` | Default `'pending'` | Task status (`pending` / `completed`) |
| `task_date` | `DATE` | `NOT NULL` | Target date |
| `created_at` | `DATETIME` | `NOT NULL` | Timestamp |

---

## Installation & Local Setup

### 1. Clone the Repository
```bash
git clone https://github.com/SimouneNicole/summative1.git
cd summative1
```

### 2. Database Configuration
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Create a new database named `summative1`.
3. Import the [`database.sql`](database.sql) file.

### 3. Environment Setup
Copy the configuration template:
```bash
cp env.example .env
```
Ensure database credentials in `.env` match your local environment:
```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost/Summative1/public/'

database.default.hostname = localhost
database.default.database = summative1
database.default.username = root
database.default.password = ''
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### 4. Run the Application
Open your browser and navigate to:
```text
http://localhost/Summative1/public/
```
*(Or use `php spark serve` to run at `http://localhost:8080`)*

---

## Routes Reference

| Route | Controller Method | Description |
|---|---|---|
| `/` | `App\Controllers\TaskSystem::welcome` | Today's tasks dashboard |
| `/tasks` | `App\Controllers\TaskSystem::taskList` | Full list of all tasks |
| `/profile` | `App\Controllers\TaskSystem::profile` | User profile page |
| `/about` | `App\Controllers\TaskSystem::about` | About developer & credits |

---

## Deployment (InfinityFree)

1. In InfinityFree Control Panel, create a MySQL database (e.g. `if0_xxxx_summative1`).
2. In phpMyAdmin, import [`database.sql`](database.sql) into your database.
3. Upload project files into `htdocs/`.
4. Copy `env.infinityfree` to `.env` in `htdocs/`, update the database host, user, and vPanel password.

---

## Author

- **Simoune Nicole**
- GitHub: [@SimouneNicole](https://github.com/SimouneNicole)
- Course: IT0049 — Technical Summative Assessment 1 (TSA1)

---

## License

This project is licensed under the [MIT License](LICENSE).
