<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class FixedDeposit extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'fixed_deposits';

    // If you want to allow mass assignment on some of your model fields:
    protected $fillable = ['id', 'name', 'logo', 'slug', 'rating', 'roi', 'month_12', 'month_24', 'month_36', 'month_48', 'month_60', 'senior', 'status', 'created_at', 'updated_at'];

    // If you do not want to use mass assignment, you may also use the guarded attribute:
    protected $guarded = [];
}
