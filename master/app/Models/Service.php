<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'category_id', 'expert_id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship to the beauty expert offering this service
    public function expert()
    {
        return $this->belongsTo(BeautyExpert::class);
    }

    // Relationship to service prices for this service
    public function servicePrices()
    {
        return $this->hasMany(ServicePrice::class);
    }
}
