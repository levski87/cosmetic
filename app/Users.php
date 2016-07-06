<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword;

	protected $table = 'users';

    protected $fillable = [
    	'username',
    	'firstname',
    	'lastname',
    	'password',
    	'email'

    ];
}
