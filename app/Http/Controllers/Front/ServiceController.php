<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();

        return view('front.services.services', compact('services'));
    }


    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        return view('front.services.service', compact('service'));
    }


    public function indexAmp()
    {
        $services = Service::all();

        return view('front.services.services-amp', compact('services'));
    }


    public function showAmp($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        return view('front.services.service-amp', compact('service'));
    }


}
