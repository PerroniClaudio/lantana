<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrafficData extends Model {
    /** @use HasFactory<\Database\Factories\TrafficDataFactory> */
    use HasFactory;

    protected $fillable = [
        'visitor_id',
        'ip_address',
        'country',
        'device_type',
        'browser',
        'page_visited',
        'referrer',
        'session_duration',
        'session_start',
    ];
}
