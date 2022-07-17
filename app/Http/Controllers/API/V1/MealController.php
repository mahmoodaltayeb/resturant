<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meal;

class MealController extends Controller
{
    //
    public function index(Request $request){
        try{



            $meals = Meal::where('category_id' , $request->category_id)->get();
            

              
             if ($meals) {
                 return response()->json(['status' => 200 , 'meals' => $meals],200);
             }

        }catch(Exception $exception){

            return response()->json(['status' => 400 , 'message' => $exception->getMessage()],400);
        }
    }
}
