<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        // Temporary, hardcoded user records.
        $users = [
            ['id' => 1, 'full_name' => 'Alex Ramos', 'username' => 'alexr', 'role' => 'Administrator', 'created_at' => '2026-10-01'],
            ['id' => 2, 'full_name' => 'Bea Torres', 'username' => 'beat', 'role' => 'Manager', 'created_at' => '2026-10-02'],
            ['id' => 3, 'full_name' => 'Paolo Lim', 'username' => 'paolol', 'role' => 'Cashier', 'created_at' => '2026-10-03'],
            ['id' => 4, 'full_name' => 'Nina Flores', 'username' => 'ninaf', 'role' => 'Cashier', 'created_at' => '2026-10-04'],
            ['id' => 5, 'full_name' => 'Marco Diaz', 'username' => 'marcod', 'role' => 'Staff', 'created_at' => '2026-10-05'],
        ];

        return view('users.index', ['users' => $users]);
    }
}
