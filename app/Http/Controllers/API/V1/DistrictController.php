<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    public function index(Request $request){
        try{


            $districts = District::where('city_id' , $request->city_id)->get();
            
            if ($districts) {
                return response()->json(['status' => 200 , 'districts' => $districts],200);
            }

        }catch(Exception $exception){

            return response()->json(['status' => 400 , 'message' => $exception->getMessage()],400);
        }
    }
}
