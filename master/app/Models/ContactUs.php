<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'message',
    ];


    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "anfaldherat7@gmail.com";
            Mail::to($adminEmail)->send(new ContactFormSubmitted($item));
        });
    }

}
