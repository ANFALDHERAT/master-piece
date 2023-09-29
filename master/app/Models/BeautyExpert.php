<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeautyExpert extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'password',
        'availability',
        'service_area',
        'services_offered',
        'description',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'expertise',
        'average_rating',
    ];
    public function receivedReviews()
    {
        return $this->hasMany(Review::class, 'expert_id');
    }
    public function services()
    {
        return $this->hasMany(Service::class, 'expert_id');
    }
}
