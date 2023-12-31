<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function beautyExperts()
    {
        return $this->hasMany(BeautyExpert::class);
    }

    public function joinUs()
    {
        return $this->hasMany(JoinUs::class);
    }
}
