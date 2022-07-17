<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meal;


class AjaxController extends Controller
{

    //Get
    // public function addToCart($id)
    // {

    //     return response()->json(['status' => 200 , 'message' => 'test' , 'id' => $id]);
    //     $meal = Meal::findOrFail($id);
    //     $cart = session()->get('cart', []);
    //          $cart[$id] = [
    //              "name" => $meal->name,
    //              "quantity" => 1,
    //              "price" => $meal->price,

    //          ]; 
    //     session()->put('cart', $cart);
    //     $cart_meals = session()->get('cart');
    //     //dd($cart_meals);

    //     return view('web.cart.index',['cart_meals' => $cart_meals]);  
    // }

    //Post
    public function addToCart(Request $request)
    {   
        //Session::flush();
        $meal = Meal::findOrFail($request->id);
        $cart = session()->get('cart', []);
        $cart[$request->id] = [
         "id"       => $meal->id,
         "name"     => $meal->name,
         "quantity" => 1,
         "price"    => $meal->price,
         "path"     => $meal->mealImages[0]->path

     ];
     session()->put('cart', $cart);

     return response()->json(['status' => 200 , 'message' => 'test' , 'data' => $cart , 'add' => 1]);

 }

     public function deleteFromCart(Request $request)
    {   
        {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

        return response()->json(['status' => 200 , 'message' => 'test' , 'data' => $cart , 'add' => 1]);

 }

public function update(Request $request)
    {
        // if($request->id and $request->quantity)
        // {
        $cart = session()->get('cart');
        $cart[$request->id]["quantity"] = $request->quantity;
        session()->put('cart', $cart);
        //     //session()->flash('success', 'Cart updated successfully');
        // }
        $data=(session()->get('cart'));
        return response()->json(['status' => 200 , 'message' => 'test' , 'data' => $data , 'add' => 1]);
    }
     
    

}
