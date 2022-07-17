<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_number',
        'booking_status'
    ];
    
    //Each table has more than one reservation
    public function reservations(){
    return $this->hasMany("App\Models\Reservation");
    }
}
