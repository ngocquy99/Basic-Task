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
      $id = $request->id;

        $dataup = [
           
            "name" => $request->username,
            "email" => $request->email,

        ];
        $user =User::where(['id'=> $id])->update($dataup);
        dd($user);
    }
}
