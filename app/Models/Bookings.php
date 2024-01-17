<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
     protected $fillable = [
        'user_id',
        'start_time',
        'end_time',
        'num_people',
        'status',
    ];

    // Define relationships if needed
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

