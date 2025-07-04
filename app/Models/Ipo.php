<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;  // MongoDB Eloquent model

class Ipo extends Model
{
    use HasFactory;

    // Use the MongoDB connection and the 'ipos' collection
    protected $connection = 'mongodb';
    protected $collection = 'ipos';

    // Allow mass assignment on IPO-specific fields
    protected $fillable = [
        'company',
        'slug',
        'symbol',
        'open_date',
        'close_date',
        'lot_size',
        'price',
        'type',
        'face_value',
        'market_lot',
        'minimum_order_quantity',
        'listing_at',
        'issue_size',
        'allotment_date',
        'initiation_refund',
        'demat_account',
        'listing_date',
        'min_lot',
        'max_lot',
        'min_share',
        'max_share',
        'min_amount',
        'max_amount'
    ];
    
    // Cast date fields to Carbon instances and numeric fields appropriately
    protected $casts = [
        'open_date'              => 'datetime',
        'close_date'             => 'datetime',
        'listing_at'             => 'datetime',
        'allotment_date'         => 'datetime',
        'listing_date'           => 'datetime',
        'lot_size'               => 'integer',
        'minimum_order_quantity' => 'integer',
        'min_lot'                => 'integer',
        'max_lot'                => 'integer',
        'min_share'              => 'integer',
        'max_share'              => 'integer',
        'min_amount'             => 'float',
        'max_amount'             => 'float',
        'issue_size'             => 'string',
        'price'                  => 'string',
        'initiation_refund'      => 'datetime',
        'demat_account'          => 'datetime',
    ];

    // Optionally, if you're using soft deletes in MongoDB:
    // protected $dates = ['deleted_at'];

    // Disable guarded if you prefer fillable only
    protected $guarded = [];
}
