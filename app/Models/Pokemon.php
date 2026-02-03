<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';
    public $fillable = ['name', 'description', 'hp', 'atk', 'def', 'sp_atk', 'sp_def', 'spd', 'shiny'];

    public function team() {
        $this->belongsToMany(Team::class);
    }
}
