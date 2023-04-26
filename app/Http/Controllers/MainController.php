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

    public function showUser(){
        $user = Auth::user();

        return view('dashboard', [
            'user' => $user,
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
        DB::delete('delete from animals_pics where animal = ?',[$animalID]);
        DB::delete('delete from search where animal = ?',[$animalID]);
        DB::delete('delete from animals where animalID = ?',[$animalID]);
        return redirect('remove')->with('status', 'Removed post from db');
    }
}
