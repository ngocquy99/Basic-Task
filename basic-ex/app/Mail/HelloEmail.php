<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HelloEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data2;
    private $username;
    private $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data2)
    {
        $this->username =$data2['username']; 
        $this->email =$data2['email']; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(address:"ngocquy1619@gmail.com", name: $this->username)
        ->subject('Hello and Welcome !!')
        ->view('mail.hello-email',[
            'username' => $this->username,
            'email' => $this->email,
         ]);
    }
}
