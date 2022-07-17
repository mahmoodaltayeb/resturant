<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Auth;


class OrderController extends Controller
{
    
    public function index(Request $request) {

        try {

            $order = Order::find($request->id);
            $order->order_id  = $order->id;
            $order->user_name = $order->user->first_name . ' '.$order->user->last_name;
            $order->meals     = $order->orderMeals;
            $order->setHidden(['id','user_id','created_at','updated_at','orderMeals','user','meal']);
            
            return response()->json(['status' => 200, 'order' => $order], 200, [], JSON_UNESCAPED_SLASHES);
        }
        catch(Exception $e) {
            report($e);
            $e = $e->getMessage();
            return response()->json(['status' => 400, 'errors' => $e], 400, [], JSON_UNESCAPED_SLASHES);
        }
    }
    // index
}
