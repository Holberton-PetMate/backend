<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';
    protected $dateFormat = 'Y/m/d H:i:s';

    protected $fillable = [
        'msg',
        'feeder_id',
        'status'
    ];
    
    protected $hidden = [
        'updated_at'
    ];

    public function feeder()
    {
        return $this->belongsTo(Feeder::class);
    }
}
