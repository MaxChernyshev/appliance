<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyPageController extends Controller
{
    public function index() {
        return view('front.staticpages.privacy');
    }

    public function indexAmp() {
        return view('front.staticpages.privacy-amp');
    }
}
