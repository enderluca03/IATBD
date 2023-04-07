<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalSpecies extends Model
{
    use HasFactory;

    protected $table = "animal_species";

    public function allSpecies() {
        return $this->hasMany("\app\Models\Animals", "species", "species");
    }
}
