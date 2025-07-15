# SLMP Backend Developer Technical Exam by Jason Soriano

- PHP 8.2+
- MySQL
- Laravel 12

## ⚙️ Setup Instructions

1. **Clone the Repository**
    ```bash
    git clone https://github.com/slmp-jasons/slmp-backend-dev-tech-exam.git
    cd slmp-backend-dev-tech-exam
2. **Install Dependencies**
    ```bash
    composer install
3. **Configure Environment**
    ```bash
    cp .env.example .env
    php artisan key:generate
4. **Set MySQL Database Credentials in .env**
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=slmp_backend_dev_tech_exam
    DB_USERNAME=root
    DB_PASSWORD=
5. **Create the Database**
    ```bash
    CREATE DATABASE slmp_backend_dev_tech_exam;
6. **Run Migrations**
    ```bash
    php artisan migrate
7. **Import Data**
    ```bash
    php artisan app:import-data
## 🧪 Postman Testing Guide

1. Set the request method (GET/POST/etc.)
2. Set the URL (e.g., http://localhost:8000/api/posts)
3. Under Authorization, choose Basic Auth
    - Username: test@example.com
    - Password: password123
4. Click Send