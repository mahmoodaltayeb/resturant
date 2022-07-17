<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

     use HasFactory;

    protected $fillable = [
        'name',
        'city_id'
    ];

    public function city(){
    return $this->belongsTo("App\Models\City");
    }

    public function user(){
    return $this->hasMany("App\Models\User");
    }
}
