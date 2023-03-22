<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsertableController extends Controller
{

    public function table()
    {
        $users = User::where('id', '>=', '1')->get();
        return view('usertable',['users'=>$users]);
    }

}
