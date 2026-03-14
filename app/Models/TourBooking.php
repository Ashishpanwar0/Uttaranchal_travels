<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourBooking extends Model
{
    protected $fillable = [
    'name',
    'email',
    'phone',
    'tour_name',
    'travel_date'
];
}
