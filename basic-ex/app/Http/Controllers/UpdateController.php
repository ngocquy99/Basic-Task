<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;

class UpdateController extends Controller
{

    /**
     * Display UPDATE page.
     * 
     * @return Renderable
     */
    public function show()
    {
        return view('update');
    }

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
            "phone_number" => $request->phonenumber,
            "gender" => $request->gender,
            "place_of_birth" => $request->placeofbirth,
        ];
        
        $user = User::where(['id' => $id])->update($dataup);
        return view('usertable');
    }
}
