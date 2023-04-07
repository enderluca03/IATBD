<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\AnimalsPics;
use App\Models\AnimalSpecies;
use App\Models\Address;
use App\Models\AddressPics;
use App\Models\Searching;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showAnimals(){
        $animals = Animals::all();
        $species = AnimalSpecies::all();
        $searching = Searching::all();
        $user = Auth::user();

        return view('animals', [
            'animals' => $animals,
            'species' => $species,
            'searching' => $searching,
            'user' => $user,
        ]);
    }
}
