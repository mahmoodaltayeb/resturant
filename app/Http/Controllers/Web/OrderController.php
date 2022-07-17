<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Meal;
use App\Models\OrderMeal;
use Auth;
use DB;
use Carbon\Carbon;

class OrderController extends Controller
{
    //
    public function index(){

        $orders = Order::where('user_id',Auth()->user()->id)->get();
        foreach($orders as $order){
        $order->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $order->created_at)->format('d-m-Y'); 
        }
        return view('web.orders.index',['orders' => $orders]);
    }
}
