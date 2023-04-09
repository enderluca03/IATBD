<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Auth;


class AddressController extends Controller
{
    public function showSpecific($location){
        $user = Auth::user();

        $location = str_replace("%20", "", $location);
        $address = Address::where('address', $location)->first();
        $allPics =  $address->searchPics;

        return view('posts/postDetail', [
            'user' => $user,

            'address' => $address,
            'location' => $location,
            'allPics' => $allPics,
        ]);
    }

    public function showContact($location){
        $user = Auth::user();

        $location = str_replace("%20", "", $location);
        $address = Address::where('address', $location)->first();

        return view('form', [
            'user' => $user,

            'address' => $location,
            'location' => $address,
        ]);
    }
}
