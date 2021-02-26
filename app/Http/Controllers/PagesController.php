<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class PagesController extends Controller
{
    public function index(){  
        $countries = Country::all();
        // dd($countries);
        return view('pages.home.index', compact('countries'));
    }

    public function privacyPolicy(){
        return view('pages.privacy-policy');
    }
}
