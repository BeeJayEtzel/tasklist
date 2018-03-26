<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\User;

class HomeController extends Controller
{
    /**
     * Shows the homepage for a given user
     */
    public function show()
    {
        $user = \Auth::user();
        return view('home.index', compact('user'));
    }


}
