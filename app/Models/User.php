<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model; // <-- from mongodb/laravel-mongodb
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable, Notifiable;

    protected $connection = 'mongodb';  // Tells Laravel to use the "mongodb" connection
    protected $collection = 'users';    // Name of your MongoDB collection (defaults to "users")

    // Mass-assignable fields
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Hidden fields
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // If you’re using Laravel 10's "hashed" casting for passwords, you can keep this:
    // (Make sure you actually store bcrypt-hashed passwords in MongoDB)
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
