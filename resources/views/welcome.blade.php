<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 text-gray-800 font-sans leading-relaxed">
        <div class="max-w-3xl mx-auto py-12 px-6">
            <h1 class="text-3xl font-bold mb-6 text-blue-700">SLMP Backend Developer Technical Exam by Jason Soriano</h1>

            <div class="space-y-6">

                <div>
                    <h2 class="text-xl font-semibold mb-2">🧰 Requirements</h2>
                    <ul class="list-disc list-inside">
                        <li class="bg-gray-100 pl-6 whitespace-pre-wrap">PHP 8.2+</li>
                        <li class="bg-gray-100 pl-6 whitespace-pre-wrap">MySQL</li>
                        <li class="bg-gray-100 pl-6 whitespace-pre-wrap">Laravel 12</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xl font-semibold mb-2">⚙️ Setup Instructions</h2>
                    <ul class="list-disc list-inside space-y-1">
                        <li><strong>Clone the Repository</strong>
                            <pre class="bg-gray-100 p-4 pl-6 whitespace-pre-wrap"><code>git clone https://github.com/slmp-jasons/slmp-backend-dev-tech-exam.git
cd slmp-backend-dev-tech-exam</code></pre>
                        </li>
                        <li><strong>Install Dependencies</strong>
                            <pre class="bg-gray-100 p-4 pl-6 whitespace-pre-wrap"><code>composer install</code></pre>
                        </li>
                        <li><strong>Configure Environment</strong>
                            <pre class="bg-gray-100 p-4 pl-6 whitespace-pre-wrap"><code>cp .env.example .env
php artisan key:generate</code></pre>
                        </li>
                        <li><strong>Set MySQL Database Credentials in <code>.env</code></strong>
                            <pre class="bg-gray-100 p-4 pl-6 whitespace-pre-wrap"><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=slmp_backend_dev_tech_exam
DB_USERNAME=root
DB_PASSWORD=</code></pre>
                        </li>
                        <li><strong>Create the Database</strong>
                            <pre class="bg-gray-100 p-4 pl-6 whitespace-pre-wrap"><code>CREATE DATABASE slmp_backend_dev_tech_exam;</code></pre>
                        </li>
                        <li><strong>Run Migrations</strong>
                            <pre class="bg-gray-100 p-4 pl-6 whitespace-pre-wrap"><code>php artisan migrate</code></pre>
                        </li>
                        <li><strong>Import Data</strong>
                            <pre class="bg-gray-100 p-4 pl-6 whitespace-pre-wrap"><code>php artisan app:import-data</code></pre>
                        </li>
                        <li><strong>Start Server</strong>
                            <pre class="bg-gray-100 p-4 pl-6 whitespace-pre-wrap"><code>php artisan serve</code></pre>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xl font-semibold mb-2">🧪 Postman Testing Guide</h2>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Set the <strong>request method</strong> (GET, POST, etc.)</li>
                        <li>Set the <strong>URL</strong> (e.g., <code>http://localhost:8000/api/posts</code>)</li>
                        <li>Under the <strong>Authorization</strong> tab, choose <strong>Basic Auth</strong></li>
                        <pre class="indent-8"><strong>Username:</strong> <code>test@example.com</code></pre>
                        <pre class="indent-8"><strong>Password:</strong> <code>password123</code></pre>
                        <li>Click <strong>Send</strong></li>
                    </ul>
                </div>

            </div>
        </div>
    </body>
</html>
