<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\Search;
use Auth;


class AnimalController extends Controller
{
    public function showSpecific($name){
        $user = Auth::user();

        $name = str_replace("%20", "", $name);
        $animalName = Animals::where('name', $name)->first();

        // $search = Search::where('id', $id)->first();

        $allPics =  $animalName->searchPics;

        return view('animals/animalDetail', [
            'user' => $user,

            // 'id' => $id,
            // 'search' => $search,
            'animal' => $animalName,
            'allPics' => $allPics,
        ]);
    }

    public function showContact($id){
        $user = Auth::user();

        $search = Searching::where('id', $id)->first();

        $animal = $search->searchingFor()->first();


        return view('add-animal', [
            'user' => $user,

            'id' => $id,
            'search' => $search,
            'animal' => $animal,
        ]);
    }
}
