<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    public $fillable = ['name', 'description', 'color'];
    public $timestamps = true;
}
