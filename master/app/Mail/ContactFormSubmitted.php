<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use RealRashid\SweetAlert\Facades\Alert;
class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Alert::success('Success', 'Thank you for contact us. we will contact you shortly.')->persistent(true)->autoClose(3000);
        return $this->subject('Contact US - '. $this->data->subject)
                    ->view('email.contact');
    }
}
