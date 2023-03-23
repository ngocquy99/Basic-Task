<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(){
        // Check for search input
        if (request('search')) {
            $users = User::where('username', 'like', '%' . request('search') . '%')->get();
        } else {
            $users = User::all();
        }
    
        return view('usertable')->with('users', $users);
    }


    public function edit (Request $request)
    {

        $userId = $request->id;
        $userInfo = User::where('id',$userId)->first();
        return view('edit')->with('info', $userInfo);
    }
}
