<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use mail;

class SignupEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    private $name;
    private $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name =$data['name']; 
        $this->email =$data['email']; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(address:"ngocquy1619@gmail.com", name: $this->name)
        ->subject('Hello and Welcome !!')
        ->view('mail.signup-email',[
            'name' => $this->name,
            'email' => $this->email,
         ]);
    }
}
