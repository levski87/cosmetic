<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

Use App\Users;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index () {
        $userid = Auth::id();
        $user = Users::find($userid);
        return view('profile', compact('user'));
    }
}
