<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandPageController extends Controller
{
    public function index() {
        return view('front.staticpages.brand');
    }

    public function indexAmp() {
        return view('front.staticpages.brand-amp');
    }
}
