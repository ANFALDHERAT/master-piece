<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'user_id', 'description', 'email', 'location', 'years_of_experience',
        'phone', 'cv', 'price', 'working_hours', 'availability', 'age', 'service_id','password',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
