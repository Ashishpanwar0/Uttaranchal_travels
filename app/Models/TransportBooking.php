<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransportBooking extends Model
{
   protected $fillable = [
    'name',
    'phone',
    'pickup_location',
    'drop_location',
    'travel_date'
];
}
