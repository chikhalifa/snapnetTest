<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    // get all countries
    public function index() {
        $countries = Country::get();
        return response()->json($countries);
    }

    public function getCountry($id){
        $country = Country::find($id);
        return response()->json(compact('country'));
    }
}
