<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
            "phonenumber" => $request->phonenumber,
            "gender" => $request->gender,
            "placeofbirth" => $request->placeofbirth,
        ];

        $user = User::where('id', $id)->update($dataup);
        return view('home.index');
    }


    public function accessEmail(Request $request)
    {
        $email = $request->email;
        $today = Carbon::now();
        $dataup = [
            "email_verified_at" => $today,
        ];
        $rowudate = User::where('email', $email)->update($dataup);
        return view('home.access');
    }


    public function searchUser(Request $request)
    {
        $nameUser = $request->id;
        $emailUser = $request->email;
        $output = [
            'msg' => 'goi thanh cong',
            'data' => [
                "name" => $nameUser,
                "email" => $emailUser,
                "email" => $emailUser,

            ]
        ];

        return Response($output);
    }


    

    public function emailCheck(Request $request)
    {
        $userEmail =  $request->emailcheck;

        $output2 = [
            'data2' => [
                'email' => $userEmail
            ]
        ];

        $dataup = [
            "email" => $request->email,
        ];

        $user = User::where('email', $userEmail)->update($dataup);
        return Response($userEmail);
    }
}
