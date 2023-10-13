<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeautyExpert extends Model
{
    use HasFactory;

    protected $fillable = [
       'id',
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
        'service_id',
        'working_hours',
        'price',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
