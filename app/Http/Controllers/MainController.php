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
use App\Models\Requests;
use App\Models\Feedback;
use Auth;
use DB;


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

    public function showAll(){
        $animals = Animals::all();
        $species = AnimalSpecies::all();
        $addresses = Address::all();
        $search = Search::all();
        $user = Auth::user();

        return view('remove', [
            'animals' => $animals,
            'species' => $species,
            'addresses' => $addresses,
            'searchg' => $search,
            'user' => $user,
        ]);
    }

    public function showUser()
    {
        $user = Auth::user();
    
        $animals = Animals::all();
        $species = AnimalSpecies::all();
        $addresses = Address::all();
        $search = Search::all();
    
        $requests = Requests::where('accepted', false)->get();
    
        $animalNames = [];
    
        foreach ($requests as $request) {
            $animal = Animals::where('animalID', $request->animal)->first();
            $animalNames[$request->id] = $animal ? $animal->name : '';
        }
    
        $feedbacks = Feedback::all();

        return view('dashboard', [
            'user' => $user,
            'animals' => $animals,
            'species' => $species,
            'addresses' => $addresses,
            'searchg' => $search,
            'requests' => $requests,
            'animalNames' => $animalNames,
            'feedbacks' => $feedbacks
        ]);
    }

    public function deletePost($address){
        DB::delete('delete from address_available where address = ?',[$address]);
        DB::delete('delete from address_pics where address = ?',[$address]);
        DB::delete('delete from feedback where address = ?',[$address]);
        DB::delete('delete from address where address = ?',[$address]);
        return redirect('remove')->with('status', 'Removed post from db');
    }

    public function deleteAnimal($animalID){
        DB::delete('delete from request where animal = ?', [$animalID]);
        DB::delete('delete from animals_pics where animal = ?',[$animalID]);
        DB::delete('delete from search where animal = ?',[$animalID]);
        DB::delete('delete from animals where animalID = ?',[$animalID]);
        return redirect('remove')->with('status', 'Removed post from db');
    }

    public function showRequest()
    {
        $animals = Animals::all();
        $species = AnimalSpecies::all();
        $addresses = Address::all();
        $search = Search::all();
        $user = Auth::user();
    
        $requests = Requests::where('accepted', false)->get();
    
        return view('requests', [
            'animals' => $animals,
            'species' => $species,
            'addresses' => $addresses,
            'searchg' => $search,
            'user' => $user,
            'requests' => $requests,
        ]);
    }

    public function createRequest(Request $request){
        $user = Auth::user();
        $animalId = $request->input('animal_id');
    
        $create = new Requests;
        $create->owner = $user->id;
        $create->animal = $animalId;
        $create->accepted = false;
        $create->save();

        return redirect('animals')->with('status', 'Request inserted in DB');
    }

    public function acceptRequest (Request $request){
        $requestId = $request->input('request_id');
        $accept = Requests::find($requestId);
    
        if ($accept) {
            $accept->accepted = true;
            $accept->save();
            return redirect('dashboard')->with('status', 'Request accepted');
        } else {
            return redirect('dashboard')->with('error', 'Request not found');
        }
    }
}
