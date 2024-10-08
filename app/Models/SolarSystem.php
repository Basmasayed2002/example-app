<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\QueryException;

class SolarSystem extends Model
{
    use HasFactory;

    protected $table = 'solar_systems';

    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}

class Planet extends Model
{
    use HasFactory;

    protected $table = 'planets';

    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class);
    }
}