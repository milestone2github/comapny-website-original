<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model; // Use MongoDB Eloquent model

class Blog extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'blogs';

    // If you want to allow mass assignment on some of your model fields:
    protected $fillable = [
        'title',
        'content',
        'author',
        'post_date',
        'image',
        'slug',
        'status',
        'deleted_at',
        'created_at',
        'updated_at',
        'metaTitle',
        'metaKeyword',
        'metaUrl',
        'metaDescription',
    ];

    // If you do not want to use mass assignment, you may also use the guarded attribute:
    protected $guarded = [];
}
