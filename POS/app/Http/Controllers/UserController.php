<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id, $name)
    {
        $user = [
            'id' => $id,
            'name' => $name,
            'email' => strtolower(str_replace(' ', '_', $name)) . '@example.com',
            'joined_date' => now()->format('Y-m-d')
        ];

        return view('users.profile', compact('user'));
    }
}