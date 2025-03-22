<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'solar_system_id'];

    public function solarSystem()
    //
    {
        return $this->belongsTo(SolarSystem::class);

    }
}
