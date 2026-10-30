<?php namespace Database\Seeders; use App\Models\Customer; use App\Models\User; use Illuminate\Database\Seeder; class DatabaseSeeder extends Seeder { public function run(): void {
Customer::updateOrCreate(['email'=>'isabel.santos@example.com'],['full_name'=>'Isabel Santos','phone'=>'0917 555 0101']);
Customer::updateOrCreate(['email'=>'miguel.reyes@example.com'],['full_name'=>'Miguel Reyes','phone'=>'0917 555 0102']);
Customer::updateOrCreate(['email'=>'camille.garcia@example.com'],['full_name'=>'Camille Garcia','phone'=>'0917 555 0103']);
Customer::updateOrCreate(['email'=>'rafael.cruz@example.com'],['full_name'=>'Rafael Cruz','phone'=>'0917 555 0104']);
Customer::updateOrCreate(['email'=>'andrea.lim@example.com'],['full_name'=>'Andrea Lim','phone'=>'0917 555 0105']);
User::updateOrCreate(['username'=>'angelo.pineda'],['full_name'=>'Angelo Pineda']);
User::updateOrCreate(['username'=>'sofia.mendoza'],['full_name'=>'Sofia Mendoza']);
User::updateOrCreate(['username'=>'lucas.tan'],['full_name'=>'Lucas Tan']);
User::updateOrCreate(['username'=>'mia.delacruz'],['full_name'=>'Mia Dela Cruz']);
User::updateOrCreate(['username'=>'daniel.flores'],['full_name'=>'Daniel Flores']);
}}