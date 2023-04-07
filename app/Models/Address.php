<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';

    public function whatAnimals(){
        return $this->hasMany('\App\Models\AddressAvailable', "address", "address");
    }

    public function searchPics(){
        return $this->hasMany('\App\Models\AddressPics', "address", "address");
    }

    public function findFeedback(){
        return $this->hasMany('\App\Models\feedback', "address", "address");
    }

    public function mediaUser(){
        return $this->belongsTo('\App\Models\User', "owner", "id");
    }

    public function ownedBy(){
        return $this->belongsTo('\App\Models\User', "owner", "id");
    }
}
