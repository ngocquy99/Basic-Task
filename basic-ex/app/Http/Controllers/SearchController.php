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
            $user = User::where('username', 'like', '%' . request('search') . '%')->get();
        } else {
            $user = User::all();
        }
    
        return view('usertable')->with('users', $user);
    }

}
