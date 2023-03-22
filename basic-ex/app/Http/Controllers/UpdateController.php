<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;

class UpdateController extends Controller
{
    /**
     * Handle update request
     * 
     */
    public function update(UpdateRequest $request)
    {

        $id = $request->id;
        //thay id bằng username hoặc email, chưa xong

        $dataup = [

            "email" => $request->email,
            "name"  => $request->name,
            "username" => $request->username,
            "password" => $request->password,
            "phonenumber" => $request->phonenumber,
            "gender" => $request->gender,
            "placeofbirth" => $request->placeofbirth,
        ];
        
        $user = User::where(['id' => $id])->update($dataup);
        dd($user);

        // return view('home.index');
    }
}
