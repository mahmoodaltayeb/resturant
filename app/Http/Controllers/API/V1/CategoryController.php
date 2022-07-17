<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    //
    public function index(){
        try{

            $categories = Category::all();
            
            if ($categories) {

                return response()->json(['status' => 200 , 'categories' => $categories],200);
            }

        }catch(Exception $exception){

            return response()->json(['status' => 400 , 'message' => $exception->getMessage()],400);
        }
    }
}
