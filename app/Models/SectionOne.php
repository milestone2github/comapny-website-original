<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model; // Use MongoDB Eloquent model

class SectionOne extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'section_one';

    // If you want to allow mass assignment on some of your model fields:
    protected $fillable = ['id', 'title', 'description', 'image_url'];

    // If you do not want to use mass assignment, you may also use the guarded attribute:
    protected $guarded = [];
}
