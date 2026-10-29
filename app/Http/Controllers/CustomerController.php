<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        // Temporary, hardcoded customer records.
        $customers = [
            ['id' => 1, 'full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09171234501', 'created_at' => '2026-10-01'],
            ['id' => 2, 'full_name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '09171234502', 'created_at' => '2026-10-02'],
            ['id' => 3, 'full_name' => 'Carlo Reyes', 'email' => 'carlo@example.com', 'phone' => '09171234503', 'created_at' => '2026-10-03'],
            ['id' => 4, 'full_name' => 'Ana Garcia', 'email' => 'ana@example.com', 'phone' => '09171234504', 'created_at' => '2026-10-04'],
            ['id' => 5, 'full_name' => 'Luis Mendoza', 'email' => 'luis@example.com', 'phone' => '09171234505', 'created_at' => '2026-10-05'],
        ];

        return view('customers.index', ['customers' => $customers]);
    }
}
