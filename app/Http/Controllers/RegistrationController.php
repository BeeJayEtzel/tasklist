<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Shows the registration view 
     * 
     */
    public function show()
    {
        return view('register');
    }

    /**
     * Registers and logs in a user
     * 
     */
    public function create()
    {
        $this->validate(request(), [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create(request(['username', 'email', 'password']));

        auth()->login($user);

        return redirect()->home();
    }
}
