<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\Searching;
use Auth;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function showSpecific($id){
        $user = Auth::user();

        $search = Searching::where('id', $id)->first();

        $animal = $search->searchingFor()->first();

        $allPics =  $animal->searchPics;

        return view('animalDetail', [
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
