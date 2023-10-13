<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [

        'notes',
        'booking_id',
        'total_amount',
        'payment_method',
    ];

    // Define other properties, relationships, or methods as needed

    // Relationship to the user who made the checkout
   

    // Relationship to the booking associated with the checkout
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
