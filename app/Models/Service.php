<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'services';

    // If you want to allow mass assignment on some of your model fields:
    protected $fillable = ['id', 'title', 'description', 'image', 'is_top', 'slug', 'status', 'deleted_at', 'created_at', 'updated_at'];

    // If you do not want to use mass assignment, you may also use the guarded attribute:
    protected $guarded = [];
}
