<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsertableController extends Controller
{

    public function table(Request $request)
    {
        $users = User::paginate(15);

        return view('usertable',['users'=>$users]);
         
        // if ($request->ajax()){
            // return view('usertable', compact(['users'=>$users]) );
        // }
    }

}
