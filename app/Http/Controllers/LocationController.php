<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index() {
        return view('location', [
            "locations" => Location::all()
        ]);
    }

    public function show(string $id) {
        $location = Location::findOrFail($id);

        return view("location-details", [
            "location" => $location
        ]);
    }

    public function create(Request $request)
    {
        $item = new Location;

        $item->description = $request->input('description');
        $item->isActive = $request->input('isActive');
        
        $item->save();

        return redirect('/locations')->with('success', 'Item has been created!');;
    }


    public function update(Request $request, $id)
    {
        $item = Location::find($id);
        $item->description = $request->input('description');
        $item->isActive = $request->input('isActive');
        
        $item->save();
        return redirect('/locations');
    }

    public function delete($id) {
        $record = Location::find($id); 

        if ($record) {
            $record->delete();
        }

        return redirect('/locations');
    }
}
