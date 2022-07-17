<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderMeal;
use Session;
use Auth;

class CartController extends Controller
{
    //
    public function index(Request $request){
        try{

            //make new order
            $new_order['user_id'] = Auth::user()->id;
            $order = Order::create($new_order); 
            //meals in order 
            foreach($request->items as $item){ 
                $meal = new OrderMeal;
                $meal->quantity   = $item['quantity'];
                $meal->meal_id    = $item['meal_id'];
                $meal['order_id'] = $order->id;
                $meal->save();
            }

            $meal->setHidden(['id','user_id','created_at','updated_at','orderMeals','user','meal']);

            return response()->json(['status' => 200 , 'meal' =>$meal],200);
            
        }catch(Exception $exception){

            return response()->json(['status' => 400 , 'message' => $exception->getMessage()],400);
        }
    }
}

