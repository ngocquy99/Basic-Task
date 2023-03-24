<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsertableController extends Controller
{

    public function table()
    {
        $users = User::where('id', '>=', '1')->get();
        $users = User::paginate(10);

        return view('usertable',['users'=>$users]);
    }

}
