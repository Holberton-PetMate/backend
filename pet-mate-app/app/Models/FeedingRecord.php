<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Feeder;

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

    /**
     * Scoping Function
     */
    public function scopeMode($query, $mode)
    {
        if ($mode)
            return $query->where("mode", $mode);
    }

    /**
     * FeedingRecord has a feeder
     */
    public function feeder()
    {
        return $this->belongsTo(Feeder::class);
    }
}
