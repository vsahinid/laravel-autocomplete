<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class PagesController extends Controller
{
    public function index(){  
        return view('pages.home.index');
    }

    public function privacyPolicy(){
        return view('pages.privacy-policy');
    }
}
