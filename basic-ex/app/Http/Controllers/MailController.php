<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SignupEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        $data =[
            'name' => 'ngoc quy',
            'verificationcode' => 'rtyrty'
        ];
        Mail::to(users:'ngocquy6568@gmail.com')->send(new SignupEmail($data));
    }
}
