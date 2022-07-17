<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index(){
        try{

            $cities = City::all();
            if ($cities) {
                return response()->json(['status' => 200 , 'cities' => $cities],200);
            }

        }catch(Exception $exception){

            return response()->json(['status' => 400 , 'message' => $exception->getMessage()],400);
        }
    }
}
