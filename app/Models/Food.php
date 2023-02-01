<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    
    protected $table = 'foods';

    protected $fillable = [
        'name',
        'weight',
        'calories',
        'vitamines',
        'proteins',
        'feeder_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function feeders()
    {
        return $this->belongsToMany(Feeder::class, 'feeders');
    }
}
