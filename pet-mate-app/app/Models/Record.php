<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $table = 'records';
    protected $dateFormat = 'Y/m/d H:i:s';

    protected $fillable = [
        'notification',
        'feeder_id',
        'color'
    ];
    
    protected $hidden = [
        'updated_at'
    ];

    public function feeder()
    {
        return $this->belongsTo(Feeder::class);
    }
}
