<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
      $locations = Location::all(['title', 'slug']);

        return view('front.locations.locations', compact('locations'));
    }


    public function show($slug)
    {
        $location = Location::where('slug', $slug)->firstOrFail();

        return view('front.locations.location', compact('location'));
    }


    public function indexAmp()
    {
        $locations = Location::all(['title', 'slug']);

        return view('front.locations.locations-amp', compact('locations'));
    }


    public function showAmp($slug)
    {
        $location = Location::where('slug', $slug)->firstOrFail();

        return view('front.locations.location-amp', compact('location'));
    }

}
