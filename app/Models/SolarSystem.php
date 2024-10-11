<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\QueryException;

Class SolarSystem extends Model
{
    use HasFactory;

    protected $table = 'solar_systems';

    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}

Class Planet extends Model
{
    use HasFactory;

    protected $table = 'planets';

    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class);
    }
}