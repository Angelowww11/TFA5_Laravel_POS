# Laravel POS TFA6

Repository: https://github.com/Angelowww11/TFA5_Laravel_POS

PHP 8.2+, Composer and SQLite are required. Run composer install, copy .env.example to .env, create database/database.sqlite, run php artisan key:generate and php artisan migrate --seed, then php artisan serve --port=8055.

TFA6 replaces controller arrays with Customer and User Eloquent queries. Customers have full_name, email, phone. Users have unique username and full_name. DatabaseSeeder safely inserts or updates five records in each table. Account views use @foreach and model properties. Migration and seeder files are included. Hosting remains pending.
