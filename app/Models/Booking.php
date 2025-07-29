<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'postcode',
        'previous_lessons',
        'theory_test',
        'transmission',
        'message',
    ];

    protected $table = 'bookings';

    protected $casts = [
        'created_at' => 'datetime',
    ];

}
