<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Food;

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

    /**
    * returns a many-to-many relationship
    * between the User model and the Feeder
    * model through the pivot table called feeder_user.
    */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    /**
    * returns a one-to-many relationship with the Food model
    */
    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    /**
    * returns a one-to-many relationship with the Food model
    */
    public function activeFood()
    {
        return $this->belongsTo(Food::class, "active_food");
    }
}
