<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'expert_id',
        'name',

    'working_hours',
        'availability',
        'price',
'user_id',
    ];

    // Define other properties, relationships, or methods as needed

    // Relationship to the user who made the booking
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
