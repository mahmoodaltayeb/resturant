<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

     use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function districts(){
    return $this->hasMany("App\Models\District");
    }


}
