<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_type',
        'device_model',
        'browser_used',
        'location',
        'internet_type',
        'ip_address',
    ];
}
