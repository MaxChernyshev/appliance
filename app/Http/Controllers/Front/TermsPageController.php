<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsPageController extends Controller
{
    public function index() {
        return view('front.staticpages.terms');
    }

    public function indexAmp() {
        return view('front.staticpages.terms-amp');
    }
}
