<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    /**
     * Shows the login view 
     */
    public function show()
    {
        return view('login');
    }

    /**
     * Logs a user in
     */
    public function login()
    {
        $successful = auth()->attempt(request(['username', 'password']));

        if (!$successful) {
            return back()->withErrors([
                'message' => 'Incorrect Username/Password combination!'
                ]);
        }

        return redirect()->home();
    }

    /**
     * Logs a user out
     */
    public function logout()
    {
        auth()->logout();

        return redirect()->home();
    }
}
