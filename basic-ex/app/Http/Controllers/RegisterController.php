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
        // lưu
        $user = User::create($request->validated());

        // thực hiện lấy thông tin để gửi mail
        if ($user) {
            $email = $request->email;
            $data = [
                'username' => $request->username,
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password,
                'phonenumber' => $request->phonenumber,
                'gender' => $request->gender,
                'placeofbirth' => $request->placeofbirth,
            ];
            Mail::to(users: $email)->send(new SignupEmail($data));
        }
        return redirect('noti');
    }
}
