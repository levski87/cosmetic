<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Redirect;
use Request;

use App\Http\Requests;

use App\Users;

use Carbon\Carbon;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
   
	public function index() {
		$users = Users::latest()->get();
		return view('users.userindex')->with('users',$users);
	}

	public function show($id) {
		$user = Users::find($id);
		return view('users.userid', compact('user'));

	}

	public function create() {
		return view('users.userregisterindex');
	}


	/**
	 * @param CreateUserRequest $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
	public function store(CreateUserRequest $request) {

		$hashpassword = $request['password'];
		$user = new User;
		$user->username = $request['username'];
		$user->lastname = $request['lastname'];
		$user->firstname = $request['firstname'];
		$user->email = $request['email'];
		$user->password = bcrypt($hashpassword);
		$user->save();

		return Redirect('users');

	}



}
