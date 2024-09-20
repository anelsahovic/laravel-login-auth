<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{

    public function create()
    {
        return view('/register');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            "username" => "required",
            "email" => "required|email",
            "password" => "required|min:5|confirmed",
        ]);

        //create the user
        $user = User::create($attributes);

        //log in
        Auth::login($user);

        //redirect
        return redirect("/content");
    }
}
