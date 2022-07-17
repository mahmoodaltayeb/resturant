<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealeImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'meal_id',
        'created_at',
        'updated_at'
    ];

    public function meal(){
    return $this->belongsTo("App\Models\Meal");
    }
}
