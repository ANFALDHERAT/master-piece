<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'expert_id',
        'comment',
        'rating',
        'date_posted',
    ];

 // Relationship to the user who wrote the review
public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

// Relationship to the beauty expert who received the review
public function expert()
{
    return $this->belongsTo(BeautyExpert::class, 'expert_id');
}
}
