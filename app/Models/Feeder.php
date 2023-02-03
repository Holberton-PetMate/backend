<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feeder extends Model
{
    use HasFactory;

    protected $table = 'feeders';

    protected $fillable = [
        'code_id',
        'name',
        'active_food'
    ];
    
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'feeder_user');
    }

    public function foods()
    {
        return $this->hasMany(Food::class, 'foods');
    }
}
