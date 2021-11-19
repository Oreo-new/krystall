<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage() {
        return view('pages.homepage');
    }

    public function alfabetisk(){
        return view('pages.alfabetisk');
    }

    public function spakoner(){
        return view('pages.spakoner');
    }
}
