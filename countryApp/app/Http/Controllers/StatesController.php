<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;

class StatesController extends Controller
{
    // get all states
    public function index() {
        $states = States::get();
        return response()->json($states);
    }
   
    public function getState($id)
    {   
        $state = States::find($id);
        // $cities = $state->cities;
        return response()->json(['data' => $state]);
    }

    public function getStateCities($state_id)
    {   
        $state = States::find($state_id);
        $cities = $state->cities;
        return response()->json(['data' => $cities]);
    }
}
