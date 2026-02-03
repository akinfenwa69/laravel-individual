<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    public $fillable = ['name', 'description', 'color', 'player_id'];

    public function player() {
        return $this->belongsTo(Player::class);
    }

    public function pokemon() {
        return $this->belongsToMany(Pokemon::class)->limit(6);
    }
}
