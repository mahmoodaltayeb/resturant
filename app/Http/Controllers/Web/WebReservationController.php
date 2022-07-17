<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\Order;
use Carbon\Carbon;
use DB;
use Auth;


class WebReservationController extends Controller
{
    //
    public function index(){
        $orders = Order::where('user_id',Auth::id())->get();
        $now = Carbon::now()->format('Y-m-d');
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');
        $after_tomorrow = Carbon::tomorrow()->addDays(1)->format('Y-m-d');
        $tables = Table::all();
       return view ('web.book-table.index',[
            'now'           => $now ,
            'tomorrow'      => $tomorrow ,
            'after_tomorrow'=> $after_tomorrow ,
            'tables'        => $tables,
            'orders'        => $orders
        ]);
    }

    public function store(Request $request)
    {
        //
        try {
            $reservation = Reservation::all();      
            $reservation_data = $request->all();
            $reservation_data['status'] = 'waiting';
            $reservation = Reservation::create($reservation_data);
            return redirect("/home");
            
        } catch (Exception $e) {
            return $e;
        }
    }


}
