<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model; // Use MongoDB Eloquent model

class ContactSubmission extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'inquiry';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'message',
    ];
}
