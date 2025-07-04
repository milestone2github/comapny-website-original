<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Magazine extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'magazines';

    // If you want to allow mass assignment on some of your model fields:
    protected $fillable = ['issue_name', 'pdf_url', 'desc', 'image_url', 'slug', 'created_at', 'release_date'];

    // If you do not want to use mass assignment, you may also use the guarded attribute:
    protected $guarded = [];
    protected $casts = [
        'release_date' => 'datetime',
    ];
}
