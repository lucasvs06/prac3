<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'player_count', 'coach_name', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}



