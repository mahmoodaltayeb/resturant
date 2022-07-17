<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

       protected $fillable = [
       
        'user_id'
    ];

    public function meal(){

      return $this->belongsTo("App\Models\Meal");
      
    }

    public function reservations(){

       return $this->hasMany("App\Models\Reservation");
       
    }

    public function user(){

      return $this->belongsTo("App\Models\User");
      
    }

    public function orderMeals(){

      return $this->hasMany("App\Models\OrderMeal");
      
    }    

}
