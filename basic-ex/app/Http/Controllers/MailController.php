<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SignupEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        $listUser  = [

        ];
        $data =[
            'name' => 'ngoc quy',
            "email" => 'quy@gmail,com',
            'verificationcode' => 'rtyrty'
        ];
        Mail::to(users:'ngocquy6568@gmail.com')->send(new SignupEmail($data));
    }
}
