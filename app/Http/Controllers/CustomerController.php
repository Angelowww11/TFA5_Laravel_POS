<?php
namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        // Static PHP array used as the temporary data source for TFA5.
        $customers = [
            ['id' => 'CUS-001', 'name' => 'Isabel Santos', 'email' => 'isabel.santos@example.com', 'phone' => '0917 555 0101', 'city' => 'Quezon City', 'status' => 'Active'],
            ['id' => 'CUS-002', 'name' => 'Miguel Reyes', 'email' => 'miguel.reyes@example.com', 'phone' => '0918 555 0102', 'city' => 'Makati City', 'status' => 'Active'],
            ['id' => 'CUS-003', 'name' => 'Camille Garcia', 'email' => 'camille.garcia@example.com', 'phone' => '0919 555 0103', 'city' => 'Pasig City', 'status' => 'Active'],
            ['id' => 'CUS-004', 'name' => 'Rafael Cruz', 'email' => 'rafael.cruz@example.com', 'phone' => '0920 555 0104', 'city' => 'Manila', 'status' => 'Inactive'],
            ['id' => 'CUS-005', 'name' => 'Andrea Lim', 'email' => 'andrea.lim@example.com', 'phone' => '0921 555 0105', 'city' => 'Taguig City', 'status' => 'Active'],
        ];
        return view('customers.index', compact('customers'));
    }
}
