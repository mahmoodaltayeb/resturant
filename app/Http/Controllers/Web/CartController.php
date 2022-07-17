<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderMeal;
use App\Models\Order;
use Session;
use DB;
use Auth;

class CartController extends Controller
{
    //
    public function index(){
        //Session::flush();
        //dd(Session::get('cart'));
        //dd(Session::get('cart'));
        return view('web.cart.index');
    }

    public function store(){
        $new_order_data['user_id'] = Auth::user()->id;
        $order = Order::create($new_order_data);

        $ordermeals = session()->get('cart');
               foreach($ordermeals as $ordermeal){
                $order_data['price']    = $ordermeal['price'];
                $order_data['quantity'] = $ordermeal['quantity'];
                $order_data['order_id'] = $order->id;
                $order_data['meal_id']  = $ordermeal['id'];           
                $order_meal = OrderMeal::create($order_data);
    }
    session()->forget('cart');
    return redirect("/cart");
    }

        public function clearAll(){
        Session::flush();
        return view('web.cart.index');
}

}
