<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;

    protected $table = "animals";

    public function searchPics() {
        return $this->hasMany("\App\Models\AnimalsPics", "animal", "animalID");
    }

    public function whichSpecies() {
        return $this->belongsTo("\App\Models\AnimalSpecies", "species", "species");
    }

    public function owner() {
        return $this->belongsTo("\App\Models\User", "owner", "id");
    }
}
