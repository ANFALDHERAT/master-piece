<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'expert_id',
        'user_id',
        'payment',
        'notes',
        'booking_id',
        'total_amount',
        'payment_method',
    ];

    // Define other properties, relationships, or methods as needed

    // Relationship to the user who made the checkout
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship to the beauty expert associated with the checkout
    public function expert()
    {
        return $this->belongsTo(BeautyExpert::class);
    }

    // Relationship to the booking associated with the checkout
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
