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
      
        $users = User::paginate(5);

        return view('usertable',['users'=>$users]);
    }

}
