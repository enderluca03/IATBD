<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\Search;
use Auth;


class AnimalController extends Controller
{
    public function showSpecific($id){
        $user = Auth::user();

        // $id = str_replace("%20", "", $id);
        // $animal = Animals::where('id', $id)->first();

        $search = Search::where('id', $id)->first();

        $animal = $search->searchingFor()->first();

        $allPics =  $animal->searchPics;

        return view('animals/animalDetail', [
            'user' => $user,

            'id' => $id,
            'search' => $search,
            'animal' => $animal,
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
