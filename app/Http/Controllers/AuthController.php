<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
        request()->validate([
            'name' => ['require','max:255','min:3'], 
            'username' => ['require','max:255','min:3'],
            'email' => ['require','email'],
            'password' => ['require','min:8']
        ]);
    }
}
