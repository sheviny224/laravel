<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docent extends Model
{
    use HasFactory;

    
    protected $table = 'docenten';

    protected $fillable = ['naam', 'hobby', 'datum_invoer'];

    public function vakken()
    {
        return $this->hasMany(Vak::class);
    }
}

Vak::create (['naam' => 'Wiskunde', 'beschrijving' => 'Wiskunde vak', 'docent_id' => 1 ]); 