<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Animals;
use App\Models\AnimalsPics;
use App\Models\AnimalSpecies;
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

            $name = User::where('id',$animal->owner)->first();

            return view('animals/animalDetail', [
                'user' => $user,

                'id' => $id,
                'search' => $search,
                'animal' => $animal,
                'allPics' => $allPics,
                'name' => $name,
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
        $search->from = $request->from;
        $search->to = $request->to;
        $search->payment = $request->price;
        $search->save();

        if ($animal->id) {
            if ($request->pics != null) {
                
                $file = $request->file('pics');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('media/Animals');
                $file->move($destinationPath, $fileName);

                $pics = new AnimalsPics;
                $pics->animal = $animal->id;
                $pics->pics = $fileName;
                $pics->save();
            } else {
                $pics = new AnimalsPics;
                $pics->animal = $animal->id;
                $pics->save();
            }
        }

        return redirect('adding/newAnimal')->with('status', 'Animal inserted in DB');
    }

    public function filter(Request $request)
    {
        if ($request->species) {
            $animals = Animals::where("species", $request->species)->get();
            $species = AnimalSpecies::where("species", $request->species)->get();
        } else {
            $animals = Animals::all();
            $species = AnimalSpecies::all();
        }

        $search = Search::all();
        $user = Auth::user();

        return view('animals/index', [
            'animals' => $animals,
            'species' => $species,
            'search' => $search,
            'user' => $user,
        ]);
    }

    public function clearFilter(Request $request)
    {
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
}
