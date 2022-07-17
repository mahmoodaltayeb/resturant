<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meal;

class MenuController extends Controller
{
    //
    public function index(){

        $meals = Meal::all();
        return view ('web.menu.index',['meals' => $meals]);
    }
}
