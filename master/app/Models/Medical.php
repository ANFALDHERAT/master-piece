<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $table = 'Medical';
    use HasFactory;

    protected $fillable = [
        'id',
         'name',
         'service_area',
         'description',
         'image',
         'average_rating',

     ];
}
