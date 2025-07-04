<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Offering extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'offerings';

    // If you want to allow mass assignment on some of your model fields:
    protected $fillable = ['id', 'title', 'description', 'image_url', 'button_link', 'created_at', 'updated_at'];

    // If you do not want to use mass assignment, you may also use the guarded attribute:
    protected $guarded = [];
}
