<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    
    public function feeders()
    {
        return $this->belongsToMany(Feeder::class, 'feeders');
    }
}
