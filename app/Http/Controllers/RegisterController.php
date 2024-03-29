<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register', [
            "title" => "Register",
            "active" => "register"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|max:255",
            "username" => "required|max:20",
            "email" => "required|email:dns|unique:users",
            "password" => "required|min:5|max:255"
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with(['successRegister' => 'Registration successfull! Please Login']);
    }
}

