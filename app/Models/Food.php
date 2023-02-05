<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Feeder;

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

    /**
    * returns a one-to-one relationship with the Feeder model
    */
    public function feeder()
    {
        return $this->belongsTo(Feeder::class);
    }
}
