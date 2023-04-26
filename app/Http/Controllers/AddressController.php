<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\AddressPics;
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

    public function store(Request $request)
    {
        $user = Auth::user();

        $address = new Address;

        $address->owner = $user->id;
        $address->address = $request->address;
        $address->town = $request->town;
        $address->save();

        if ($address->id) {
            if ($request->pics != null) {
                
            
                $file = $request->file('pics');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('media/Address');
                $file->move($destinationPath, $fileName);

                $pics = new AddressPics;
                $pics->address = $address->address;
                $pics->pics = $fileName;

                $pics->save();
            } else {
                $pics = new AddressPics;
                $pics->address = $address->address;
                $pics->save();
            }
        }

        // $search = new Search;
        // $search->owner = $user->id;
        // $search->for = $animal->id;
        // $search->from = '2023-06-30 12:50:00';
        // $search->to = '2023-06-30 23:59:00';
        // $search->payment = 420.00;
        // $search->save();

        return redirect('adding/newPost')->with('status', 'Address inserted in DB');
    }
}
