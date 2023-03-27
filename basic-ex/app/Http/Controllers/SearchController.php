<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(){
        // Check for search input
        $limit = 10;
        if (request('search')) {
            $user = User::where('username', 'like', '%' . request('search') . '%')->paginate($limit);
        } else {
            $user = User::paginate($limit );
        }   
        return view('usertable')->with('users', $user);
    }

}
