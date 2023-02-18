<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;

    protected $table = 'weeks';

    protected $fillable = [
        'day',
        'weight_intake'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
