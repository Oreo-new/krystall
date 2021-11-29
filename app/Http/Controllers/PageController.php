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
    public function horoskops(){
        return view('pages.horoskops');
    }
    public function horoskop(){
        return view('pages.horoskop');
    }
    public function artikkelarkiv(){
        return view('pages.artikkelarkiv');
    }
    public function artikkel(){
        return view('pages.artikkel');
    }
    public function ordboks(){
        return view('pages.ordboks');
    }
    public function ordbok(){
        return view('pages.ordbok');
    }
}
