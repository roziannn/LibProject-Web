<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class testHomeController extends Controller
{
    public function home()
    {
        return view('layouts.testHome');
    }


}
