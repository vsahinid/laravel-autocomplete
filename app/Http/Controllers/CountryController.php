<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    public function autocomplete(Request $request)
    { 
        // return Country::all();
      if($request->ajax()) {
        $data = Country::where('name', 'LIKE', $request->country.'%')->take(10)->get();
            $output = '<ul class="origin-top-right right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" style="display:block; position:relative; overflow-y: scroll;">';
        if (count($data)>0) {
            foreach ($data as $row){
                $output .= '<li><button style="text-align: left;" class="w-full block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">'.$row->name.'</button></li>';
            }
        }
        else {
            $output .= '<li><button style="text-align: left;" class="w-full block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">'.'No results'.'</button></li>';
        }

        $output .= '</ul>';
        return $output;
      }
    }
}
