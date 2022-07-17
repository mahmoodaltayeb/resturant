<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMeal extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'meal_id',
        'price',
        'quantity'
    ];

    public function orderd(){

        return $this->belongsTo("App\Models\Order","order_id");
    }

    public function meal(){

        return $this->belongsTo("App\Models\Meal","meal_id");
    }
}


