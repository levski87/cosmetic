<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Users;

class LoginController extends Controller
{
    public function index() {
        return view('about');
    }

    public function check(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
        return view('success', compact('email'));
    }
        else {
            return view('about');
        }
    }
}
