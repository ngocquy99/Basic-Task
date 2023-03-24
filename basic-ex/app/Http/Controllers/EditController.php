<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function edit (Request $request)
    {
        $userId = $request->id;
        $userInfo = User::where('id',$userId)->first();
        return view('edit')->with('info', $userInfo);
    }
}
