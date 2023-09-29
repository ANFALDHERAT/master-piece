<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'expert_id',
        'time',
        'date',
        'description',
        'user_id',
        'service_id',
        'serviceprice_id',
    ];

    // Define other properties, relationships, or methods as needed

    // Relationship to the user who made the booking
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship to the beauty expert associated with the booking
    public function expert()
    {
        return $this->belongsTo(BeautyExpert::class);
    }

    // Relationship to the service booked in this booking
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function servicePrice()
{
    return $this->belongsTo(ServicePrice::class, 'serviceprice_id');
}

}
