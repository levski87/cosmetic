<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

	protected $table = 'users';

    protected $fillable = [
    	'username',
    	'firstname',
    	'lastname',
    	'password',
    	'email'

    ];
}
