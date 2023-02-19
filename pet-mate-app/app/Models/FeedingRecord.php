<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedingRecord extends Model
{
    use HasFactory;

    protected $table = 'feeding_records';

    protected $fillable = [
        'date',
        'weight',
        'mode'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
