<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $this->validate(
            request(),
            [
                'name'=>'required|min:4',
                'email'=>'required|email',
                'password'=>'required|min:6'
            ]
        );

        $user = User::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>bcrypt(request('password'))
        ]);

        auth()->login($user);

        return redirect('/teams');

    }
}
