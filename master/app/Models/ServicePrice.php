<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePrice extends Model
{
    use HasFactory;
    protected $fillable = ['id','service_id', 'type', 'price'];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'serviceprice_id');
    }
}
