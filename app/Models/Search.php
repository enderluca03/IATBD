<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;

    protected $table = 'search';

    public function searchRequester(){
        return $this->belongsTo('\App\Models\User', "owner", "id");
    }

    public function searchingFor(){
        return $this->belongsTo('\App\Models\Animals', "for", "animalID");
    }

    public function mediaAnimal(){
        return $this->belongsTo('\App\Models\AnimalsMedia', "for", "animal");
    }

    public function mediaUser(){
        return $this->belongsTo('\App\Models\User', "owner", "id");
    }

    public function getTimeAgo($carbonObject) {
        if($carbonObject == null){
            return "1w ago";
        }else{
            return str_ireplace(
                [' seconds', ' second', ' minutes', ' minute', ' hours', ' hour', ' days', ' day', ' weeks', ' week'], 
                ['s', 's', 'm', 'm', 'h', 'h', 'd', 'd', 'w', 'w'], 
                $carbonObject->diffForHumans()
            );
        }
    }
}
