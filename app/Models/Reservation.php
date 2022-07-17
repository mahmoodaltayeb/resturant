<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
       protected $fillable = [
       
        'date' ,
        'num_of_people' ,
        'status' ,
        'table_id' ,
        'order_id',
        'created_at' ,
        'updated_at'
    ];

    //Reservation for one table
    public function table(){
    return $this->belongsTo("App\Models\Table");
    }

    public function order(){
    return $this->belongsTo("App\Models\Order");
    }
}
