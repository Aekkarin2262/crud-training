<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{


    public function index(Request $request)
    {
        $users =User ::get();
        return view('ohm.users.index',compact('users'));

    }

}
