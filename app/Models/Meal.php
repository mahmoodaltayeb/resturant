<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

        protected $fillable = [
        'name',
        'price',
        'descreption',
        'category_id',
        'created_at',
        'updated_at'
    ];

    public function category(){
    return $this->belongsTo("App\Models\Category");
    }

    public function orders(){
    return $this->hasMany("App\Models\Order");
    }

    public function mealImages(){
    return $this->hasMany("App\Models\MealeImage");
    }

    public function orderMeals(){
    return $this->hasMany("App\Models\OrderMeal");
    }

}
    