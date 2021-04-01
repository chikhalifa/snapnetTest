<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities;

class CitiesController extends Controller
{
    // lists all cities
    public function index(){
        return response()->json(['cities'=>Cities::get()]);
    }

    public function getCity($id){
        $city = Cities::find($id);
        return response()->json(compact('city'));
    }
}
