<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\SignupEmail;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\Return_;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        // luu
        $user = User::create($request->validated());
       
        // thuc hien lay thong tin de gui mail 
        if($user){
            $email = $request->email;
            $data = [
                'name' => $request->name, 
                'email' => $request->email,
            ];
            Mail::to(users: $email )->send(new SignupEmail($data));
        }
       

        return redirect('/');
    }


}
