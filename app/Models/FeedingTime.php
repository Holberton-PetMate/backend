<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedingTime extends Model
{
    use HasFactory;

    protected $table = 'feeding_times';

    protected $fillable = [
        'time',
        'weight'
    ];
    
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
