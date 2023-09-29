<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'image',
        'cv',
        'description',
        'location',
        'years_of_experience',
        'age',
        'price',
        'profession',
    ];
}
