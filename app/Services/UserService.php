<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * Create a new User with an autogenerated 'name' and 'password'
     * if they have not been provided
     * 
     * @param userData array
     */
    public function store(array $userData): User
    {
        $random_password = Str::random(12);
        return User::create(
            array_merge($userData, [
                'name' => explode('@', $userData['email'])[0],
                'password' => Hash::make($userData['password'] ?? $random_password)
            ])
        );
    }
}