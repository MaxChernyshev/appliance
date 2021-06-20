<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index() {
        return view('front.staticpages.homepage');
    }

    public function indexAmp() {
        return view('front.staticpages.homepage-amp');
    }


}
