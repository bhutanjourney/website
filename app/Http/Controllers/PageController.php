<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	// Culture Tours
    public function getCulture(){
    	return view('layouts.website.tours.culture.index');
    }



    // Festival Tours
    public function getFestival(){
    	return view('layouts.website.tours.festival.index');
    }

    // Nature Tours
    public function getNature(){
    	return view('layouts.website.tours.nature.index');
    }

    // Trekking Tours
    public function getTrekking(){
    	return view('layouts.website.tours.trekking.index');
    }

}
