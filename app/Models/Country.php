<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $table = 'countries';
    protected $fillable = ['name', 'continent', 'player_id'];

    public function player() {
        return $this->hasOne(Player::class);
    }
}
