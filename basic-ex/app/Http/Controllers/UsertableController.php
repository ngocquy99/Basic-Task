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
        $users = User::latest()->paginate(15);

        $response = [
            'pagination' => [
                'total' => $users->total(),
                'per_page' => $users->perPage(),
                'last_page' => $users->lastPage(),
                'from' => $users->firstItem(),
                'to' => $users->lastItem(),
                'current_page' => $users->currentPage()
            ],
            'data' => $users
        ];
        // return response()->json($response);

        return view('usertable',['users'=>$users]);
         
        
    }

}
