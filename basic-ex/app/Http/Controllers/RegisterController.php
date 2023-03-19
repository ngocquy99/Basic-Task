<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

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


        $user = User::create($request->validated());




        return redirect('/')->with('success', "Account successfully registered.");
    }

    public function update(Request $request){
    
    //   dd($request->all());
    
      $name = $request->username;

        $dataup = [
           
            "name" => $request->username,
            "email" => $request->email,
            "password" =>$request->password,

        ];
        $user =User::where(['id'=> $name])->update($dataup);
        dd($user);
    }
}
