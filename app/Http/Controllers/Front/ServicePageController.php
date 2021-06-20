<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function index() {
        return view('front.staticpages.service');
    }

    public function indexAmp() {
        return view('front.staticpages.service-amp');
    }
}
