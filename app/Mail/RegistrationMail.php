<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $id;
    protected $name;
    protected $email;
    protected $contact;

    /**
     * Create a new message instance.
     */
    public function __construct($id,$name,$email,$contact)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->contact = $contact;
    }


    /**
     * Get the message content definition.
     */
    public function build() {
        $data['id'] = $this->id;
        $data['name'] = $this->name;
        $data['email'] = $this->email;
        $data['contact'] = $this->contact;
        return $this->subject('Registration Confirmation')->view('emails.registration_mail',$data);
    }

}
