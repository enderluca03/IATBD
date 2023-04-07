<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animals;
use App\Models\AnimalsPics;
use App\Models\AnimalSpecies;
use App\Models\Address;
use App\Models\AddressPics;
use App\Models\Search;
use App\Models\User;
use Auth;


class MainController extends Controller
{
    public function show(){
        $animals = Animals::all();
        $species = AnimalSpecies::all();
        $addresses = Address::all();
        $search = Search::all();
        $user = Auth::user();

        return view('home', [
            'animals' => $animals,
            'species' => $species,
            'addresses' => $addresses,
            'searchg' => $search,
            'user' => $user,
        ]);
    }

    public function showAnimals(){
        $animals = Animals::all();
        $species = AnimalSpecies::all();
        $search = Search::all();
        $user = Auth::user();

        return view('animals/index', [
            'animals' => $animals,
            'species' => $species,
            'search' => $search,
            'user' => $user,
        ]);
    }

    public function showAddresses(){
        $addresses = Address::all();
        $species = AnimalSpecies::all();
        $pics = AddressPics::all();    
        $user = Auth::user();

        return view('posts/index', [
            'addresses' => $addresses,
            'species' => $species,
            'pics' => $pics,
            'user' => $user,
        ]);
    }
}
