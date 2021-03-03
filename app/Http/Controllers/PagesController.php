<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class PagesController extends Controller
{
    public function index(){  
        return view('pages.home.index');
    }

    public function countries_checkboxes(){  
        $countries = Country::all();
        return view('pages.countries_checkboxes.countries_checkboxes', compact('countries'));
    }

    public function privacyPolicy(){
        return view('pages.privacy-policy');
    }
}
