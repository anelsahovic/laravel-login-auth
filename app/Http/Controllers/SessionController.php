<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view("/login");
    }

    public function store(){
        //validate
        $attributes=request()->validate([
            "username"=> "required",
            "password"=> "required",
        ]);

        //attempt to login
        if(!Auth::attempt(credentials: $attributes)){
            throw ValidationException::withMessages([
                "username"=> "Not valid credentials.",
            ]);
        };

        //regenerate token
        request()->session()->regenerate();

        //redirect
        return redirect("/content");
    }

    public function destroy(){
        Auth::logout();

        return redirect("/login");
    }
}
