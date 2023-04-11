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

        $search = Search::where('id', $id)->first();

        if ($search != null) {
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

    public function store(Request $request)
    {
        $user = Auth::user();

        $animal = new Animals;
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->species = $request->species;
        $animal->note = $request->note;
        $animal->owner = $user->id;
        $animal->save();

        $search = new Search;
        $search->owner = $user->id;
        $search->animal = $animal->id;
        $search->from = '2023-06-30 12:50:00';
        $search->to = '2023-06-30 23:59:00';
        $search->payment = 420.00;
        $search->save();

        return redirect('adding/newAnimal')->with('status', 'Animal inserted in DB');
    }
}
