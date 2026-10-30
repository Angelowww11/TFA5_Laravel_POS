<?php
namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            ['id' => 'USR-001', 'name' => 'Angelo Pineda', 'username' => 'angelo.pineda', 'email' => 'angelo.pineda@example.com', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 'USR-002', 'name' => 'Sofia Mendoza', 'username' => 'sofia.mendoza', 'email' => 'sofia.mendoza@example.com', 'role' => 'Manager', 'status' => 'Active'],
            ['id' => 'USR-003', 'name' => 'Lucas Tan', 'username' => 'lucas.tan', 'email' => 'lucas.tan@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 'USR-004', 'name' => 'Mia Dela Cruz', 'username' => 'mia.delacruz', 'email' => 'mia.delacruz@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 'USR-005', 'name' => 'Daniel Flores', 'username' => 'daniel.flores', 'email' => 'daniel.flores@example.com', 'role' => 'Cashier', 'status' => 'Inactive'],
        ];
        return view('users.index', compact('users'));
    }
}
